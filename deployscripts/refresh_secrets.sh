#!/bin/bash
# copy secrets.yml from s3 bucket

. $(dirname $0)/common_functions.sh

msg "Running AWS CLI with region: $(get_instance_region)"

cd $TARGET_DIR

# get this instance's ID
TOKEN=$(curl -X PUT "http://169.254.169.254/latest/api/token" -H "X-aws-ec2-metadata-token-ttl-seconds: 21600")
AWS_REGION=$(curl -H "X-aws-ec2-metadata-token: $TOKEN" -s http://169.254.169.254/latest/meta-data/placement/region)

if [ $? != 0 -o -z "$AWS_REGION" ]; then
    error_exit "Unable to get this instance's REGION; cannot continue."
fi

# Get current time
msg "Started $(basename $0) at $(/bin/date "+%F %T")"
start_sec=$(/bin/date +%s.%N)

msg "Checking if secrets.yml exist or not in configuration"
SECRETS_FILE=$(cat /etc/config/secrets.yml | sed -r 's/^\s+$//' | sed -n '/secret:/,/^$/p' | grep s3 | awk '{print $2}')

if [ ! -z "$SECRETS_FILE" ]; then
    aws s3 --region $AWS_REGION ls $SECRETS_FILE
    if [ $? != 0 ]; then
        error_exit "Failed to list the secrets.yml in $SECRETS_FILE"
    else
        cp /etc/config/secrets.yml /etc/config/secrets.$(date +%F)
        aws s3 --region $AWS_REGION cp $SECRETS_FILE /etc/config/secrets.yml
        msg "secrets.yml is successfully updated"
        exit 0
    fi
else
    msg "secrets.yml doesn't contain s3 url"
    exit 0
fi

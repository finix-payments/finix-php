
echo "Removing Models"
find ./src/lib/Model ! -name 'FinixList.php' -type f -exec rm -f {} +

echo "Generating Library"
openapi-generator generate \
-g php \
-i openapi/finix-api.yaml \
-o src \
-t template \
--additional-properties=artifactVersion=2.0.0 \
--global-property skipFormModel=false \
--global-property modelTests=false,modelDocs=false \
--global-property apiDocs=false \
--skip-validate-spec \
-p invokerPackage=Finix \

# --type-mappings=File=ModelFile

mv ./src/lib/Configuration.php ./src/lib/FinixClient.php
mv ./src/composer.json composer.json
rm ./src/README.md
rm -rf src/.openapi-generator
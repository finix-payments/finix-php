<?php
/**
 * Dispute
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */

namespace Finix\Model;

use \ArrayAccess;
use \Finix\ObjectSerializer;

/**
 * Dispute Class Doc Comment
 *
 * @category Class
 * @description A &#x60;Dispute&#x60; objected created for a chargeback or customer disputes.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Dispute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Dispute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'action' => 'string',
        'amount' => 'int',
        'application' => 'string',
        'currency' => '\Finix\Model\Currency',
        'dispute_details' => '\Finix\Model\DisputeDisputeDetails',
        'identity' => 'string',
        'message' => 'string',
        'occurred_at' => '\DateTime',
        'reason' => 'string',
        'respond_by' => '\DateTime',
        'state' => 'string',
        'tags' => 'array<string,string>',
        'transfer' => 'string',
        '_links' => '\Finix\Model\DisputeLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'action' => null,
        'amount' => null,
        'application' => null,
        'currency' => null,
        'dispute_details' => null,
        'identity' => null,
        'message' => null,
        'occurred_at' => 'date-time',
        'reason' => null,
        'respond_by' => 'date-time',
        'state' => null,
        'tags' => null,
        'transfer' => null,
        '_links' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'action' => 'action',
        'amount' => 'amount',
        'application' => 'application',
        'currency' => 'currency',
        'dispute_details' => 'dispute_details',
        'identity' => 'identity',
        'message' => 'message',
        'occurred_at' => 'occurred_at',
        'reason' => 'reason',
        'respond_by' => 'respond_by',
        'state' => 'state',
        'tags' => 'tags',
        'transfer' => 'transfer',
        '_links' => '_links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'action' => 'setAction',
        'amount' => 'setAmount',
        'application' => 'setApplication',
        'currency' => 'setCurrency',
        'dispute_details' => 'setDisputeDetails',
        'identity' => 'setIdentity',
        'message' => 'setMessage',
        'occurred_at' => 'setOccurredAt',
        'reason' => 'setReason',
        'respond_by' => 'setRespondBy',
        'state' => 'setState',
        'tags' => 'setTags',
        'transfer' => 'setTransfer',
        '_links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'action' => 'getAction',
        'amount' => 'getAmount',
        'application' => 'getApplication',
        'currency' => 'getCurrency',
        'dispute_details' => 'getDisputeDetails',
        'identity' => 'getIdentity',
        'message' => 'getMessage',
        'occurred_at' => 'getOccurredAt',
        'reason' => 'getReason',
        'respond_by' => 'getRespondBy',
        'state' => 'getState',
        'tags' => 'getTags',
        'transfer' => 'getTransfer',
        '_links' => 'getLinks'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const REASON_CLERICAL = 'CLERICAL';
    public const REASON_FRAUD = 'FRAUD';
    public const REASON_INQUIRY = 'INQUIRY';
    public const REASON_QUALITY = 'QUALITY';
    public const REASON_TECHNICAL = 'TECHNICAL';
    public const STATE_INQUIRY = 'INQUIRY';
    public const STATE_PENDING = 'PENDING';
    public const STATE_WON = 'WON';
    public const STATE_LOST = 'LOST';
    public const STATE_ARBITRATION = 'ARBITRATION';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_CLERICAL,
            self::REASON_FRAUD,
            self::REASON_INQUIRY,
            self::REASON_QUALITY,
            self::REASON_TECHNICAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_INQUIRY,
            self::STATE_PENDING,
            self::STATE_WON,
            self::STATE_LOST,
            self::STATE_ARBITRATION,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['application'] = $data['application'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['dispute_details'] = $data['dispute_details'] ?? null;
        $this->container['identity'] = $data['identity'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['occurred_at'] = $data['occurred_at'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['respond_by'] = $data['respond_by'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['transfer'] = $data['transfer'] ?? null;
        $this->container['_links'] = $data['_links'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reason', must be one of '%s'",
                $this->container['reason'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The ID of the `Dispute` resource.
     *
     * @return self
     */
    public function setId($id, $deserialize = false)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Timestamp of when the object was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at, $deserialize = false)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Timestamp of when the object was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at, $deserialize = false)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action The next `action` required to move forward with the `Dispute`.
     *
     * @return self
     */
    public function setAction($action, $deserialize = false)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount The total amount of the `Dispute` (in cents).
     *
     * @return self
     */
    public function setAmount($amount, $deserialize = false)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets application
     *
     * @return string|null
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param string|null $application The ID of the `Application` resource that the `Dispute` was created under.
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Finix\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Finix\Model\Currency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency, $deserialize = false)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets dispute_details
     *
     * @return \Finix\Model\DisputeDisputeDetails|null
     */
    public function getDisputeDetails()
    {
        return $this->container['dispute_details'];
    }

    /**
     * Sets dispute_details
     *
     * @param \Finix\Model\DisputeDisputeDetails|null $dispute_details dispute_details
     *
     * @return self
     */
    public function setDisputeDetails($dispute_details, $deserialize = false)
    {
        $this->container['dispute_details'] = $dispute_details;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return string|null
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param string|null $identity The ID of the `Identity` associated with the `Dispute`.
     *
     * @return self
     */
    public function setIdentity($identity, $deserialize = false)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message Message field that provides additional details. This field is typically **null**.
     *
     * @return self
     */
    public function setMessage($message, $deserialize = false)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets occurred_at
     *
     * @return \DateTime|null
     */
    public function getOccurredAt()
    {
        return $this->container['occurred_at'];
    }

    /**
     * Sets occurred_at
     *
     * @param \DateTime|null $occurred_at Point in time when the `Transfer` that's getting disputed got created.
     *
     * @return self
     */
    public function setOccurredAt($occurred_at, $deserialize = false)
    {
        $this->container['occurred_at'] = $occurred_at;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason The system-defined reason for the `Dispute`. Available values include:<ul><li>**INQUIRY**<li>**QUALITY**<li>**FRAUD**
     *
     * @return self
     */
    public function setReason($reason, $deserialize = false)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($reason) && !in_array($reason, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reason', must be one of '%s'",
                    $reason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets respond_by
     *
     * @return \DateTime|null
     */
    public function getRespondBy()
    {
        return $this->container['respond_by'];
    }

    /**
     * Sets respond_by
     *
     * @param \DateTime|null $respond_by Point in time, the `Merchant` needs to respond to the dispute by.
     *
     * @return self
     */
    public function setRespondBy($respond_by, $deserialize = false)
    {
        $this->container['respond_by'] = $respond_by;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The current state of the `Dispute`.
     *
     * @return self
     */
    public function setState($state, $deserialize = false)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return array<string,string>|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param array<string,string>|null $tags Key value pair for annotating custom meta data (e.g. order numbers).
     *
     * @return self
     */
    public function setTags($tags, $deserialize = false)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets transfer
     *
     * @return string|null
     */
    public function getTransfer()
    {
        return $this->container['transfer'];
    }

    /**
     * Sets transfer
     *
     * @param string|null $transfer ID of the `Transfer` resource.
     *
     * @return self
     */
    public function setTransfer($transfer, $deserialize = false)
    {
        $this->container['transfer'] = $transfer;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \Finix\Model\DisputeLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\DisputeLinks|null $_links _links
     *
     * @return self
     */
    public function setLinks($_links, $deserialize = false)
    {
        $this->container['_links'] = $_links;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



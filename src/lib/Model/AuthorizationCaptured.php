<?php
/**
 * AuthorizationCaptured
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
 * AuthorizationCaptured Class Doc Comment
 *
 * @category Class
 * @description A captured authorization
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AuthorizationCaptured implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuthorizationCaptured';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        '_3ds_redirect_url' => 'string',
        'additional_buyer_charges' => '\Finix\Model\AdditionalBuyerCharges',
        'amount' => 'int',
        'application' => 'string',
        'card_present_details' => '\Finix\Model\CardPresentDetails',
        'capture_amount' => 'int',
        'currency' => '\Finix\Model\Currency',
        'device' => 'string',
        'expires_at' => '\DateTime',
        'external_responses' => '\Finix\Model\AuthorizationCapturedExternalResponsesInner[]',
        'failure_code' => 'string',
        'failure_message' => 'string',
        'idempotency_id' => 'string',
        'is_void' => 'bool',
        'merchant_identity' => 'string',
        'messages' => 'string[]',
        'raw' => 'object',
        'source' => 'string',
        'state' => 'string',
        'tags' => 'array<string,string>',
        'trace_id' => 'string',
        'transfer' => 'string',
        'void_state' => 'string',
        '_links' => '\Finix\Model\AuthorizationLinks'
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
        '_3ds_redirect_url' => null,
        'additional_buyer_charges' => null,
        'amount' => null,
        'application' => null,
        'card_present_details' => null,
        'capture_amount' => 'int64',
        'currency' => null,
        'device' => null,
        'expires_at' => 'date-time',
        'external_responses' => null,
        'failure_code' => null,
        'failure_message' => null,
        'idempotency_id' => null,
        'is_void' => null,
        'merchant_identity' => null,
        'messages' => null,
        'raw' => null,
        'source' => null,
        'state' => null,
        'tags' => null,
        'trace_id' => null,
        'transfer' => null,
        'void_state' => null,
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
        '_3ds_redirect_url' => '3ds_redirect_url',
        'additional_buyer_charges' => 'additional_buyer_charges',
        'amount' => 'amount',
        'application' => 'application',
        'card_present_details' => 'card_present_details',
        'capture_amount' => 'capture_amount',
        'currency' => 'currency',
        'device' => 'device',
        'expires_at' => 'expires_at',
        'external_responses' => 'external_responses',
        'failure_code' => 'failure_code',
        'failure_message' => 'failure_message',
        'idempotency_id' => 'idempotency_id',
        'is_void' => 'is_void',
        'merchant_identity' => 'merchant_identity',
        'messages' => 'messages',
        'raw' => 'raw',
        'source' => 'source',
        'state' => 'state',
        'tags' => 'tags',
        'trace_id' => 'trace_id',
        'transfer' => 'transfer',
        'void_state' => 'void_state',
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
        '_3ds_redirect_url' => 'set3dsRedirectUrl',
        'additional_buyer_charges' => 'setAdditionalBuyerCharges',
        'amount' => 'setAmount',
        'application' => 'setApplication',
        'card_present_details' => 'setCardPresentDetails',
        'capture_amount' => 'setCaptureAmount',
        'currency' => 'setCurrency',
        'device' => 'setDevice',
        'expires_at' => 'setExpiresAt',
        'external_responses' => 'setExternalResponses',
        'failure_code' => 'setFailureCode',
        'failure_message' => 'setFailureMessage',
        'idempotency_id' => 'setIdempotencyId',
        'is_void' => 'setIsVoid',
        'merchant_identity' => 'setMerchantIdentity',
        'messages' => 'setMessages',
        'raw' => 'setRaw',
        'source' => 'setSource',
        'state' => 'setState',
        'tags' => 'setTags',
        'trace_id' => 'setTraceId',
        'transfer' => 'setTransfer',
        'void_state' => 'setVoidState',
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
        '_3ds_redirect_url' => 'get3dsRedirectUrl',
        'additional_buyer_charges' => 'getAdditionalBuyerCharges',
        'amount' => 'getAmount',
        'application' => 'getApplication',
        'card_present_details' => 'getCardPresentDetails',
        'capture_amount' => 'getCaptureAmount',
        'currency' => 'getCurrency',
        'device' => 'getDevice',
        'expires_at' => 'getExpiresAt',
        'external_responses' => 'getExternalResponses',
        'failure_code' => 'getFailureCode',
        'failure_message' => 'getFailureMessage',
        'idempotency_id' => 'getIdempotencyId',
        'is_void' => 'getIsVoid',
        'merchant_identity' => 'getMerchantIdentity',
        'messages' => 'getMessages',
        'raw' => 'getRaw',
        'source' => 'getSource',
        'state' => 'getState',
        'tags' => 'getTags',
        'trace_id' => 'getTraceId',
        'transfer' => 'getTransfer',
        'void_state' => 'getVoidState',
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

    public const STATE_CANCELED = 'CANCELED';
    public const STATE_PENDING = 'PENDING';
    public const STATE_FAILED = 'FAILED';
    public const STATE_SUCCEEDED = 'SUCCEEDED';
    public const STATE_UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_CANCELED,
            self::STATE_PENDING,
            self::STATE_FAILED,
            self::STATE_SUCCEEDED,
            self::STATE_UNKNOWN,
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
        $this->container['_3ds_redirect_url'] = $data['_3ds_redirect_url'] ?? null;
        $this->container['additional_buyer_charges'] = $data['additional_buyer_charges'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['application'] = $data['application'] ?? null;
        $this->container['card_present_details'] = $data['card_present_details'] ?? null;
        $this->container['capture_amount'] = $data['capture_amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
        $this->container['expires_at'] = $data['expires_at'] ?? null;
        $this->container['external_responses'] = $data['external_responses'] ?? null;
        $this->container['failure_code'] = $data['failure_code'] ?? null;
        $this->container['failure_message'] = $data['failure_message'] ?? null;
        $this->container['idempotency_id'] = $data['idempotency_id'] ?? null;
        $this->container['is_void'] = $data['is_void'] ?? null;
        $this->container['merchant_identity'] = $data['merchant_identity'] ?? null;
        $this->container['messages'] = $data['messages'] ?? null;
        $this->container['raw'] = $data['raw'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['trace_id'] = $data['trace_id'] ?? null;
        $this->container['transfer'] = $data['transfer'] ?? null;
        $this->container['void_state'] = $data['void_state'] ?? null;
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

        if (!is_null($this->container['amount']) && ($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
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
     * @param string|null $id The ID of the `Authorization` resource.
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
     * Gets _3ds_redirect_url
     *
     * @return string|null
     */
    public function get3dsRedirectUrl()
    {
        return $this->container['_3ds_redirect_url'];
    }

    /**
     * Sets _3ds_redirect_url
     *
     * @param string|null $_3ds_redirect_url The redirect URL used for 3DS transactions (if supported by the processor).
     *
     * @return self
     */
    public function set3dsRedirectUrl($_3ds_redirect_url, $deserialize = false)
    {
        $this->container['_3ds_redirect_url'] = $_3ds_redirect_url;

        return $this;
    }

    /**
     * Gets additional_buyer_charges
     *
     * @return \Finix\Model\AdditionalBuyerCharges|null
     */
    public function getAdditionalBuyerCharges()
    {
        return $this->container['additional_buyer_charges'];
    }

    /**
     * Sets additional_buyer_charges
     *
     * @param \Finix\Model\AdditionalBuyerCharges|null $additional_buyer_charges additional_buyer_charges
     *
     * @return self
     */
    public function setAdditionalBuyerCharges($additional_buyer_charges, $deserialize = false)
    {
        $this->container['additional_buyer_charges'] = $additional_buyer_charges;

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
     * @param int|null $amount The total amount that will be debited in cents (e.g. 100 cents to debit $1.00).
     *
     * @return self
     */
    public function setAmount($amount, $deserialize = false)
    {

        if (!is_null($amount) && ($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling AuthorizationCaptured., must be bigger than or equal to 0.');
        }
        

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
     * @param string|null $application The ID of the `Application` resource the `Authorization` was created under.
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets card_present_details
     *
     * @return \Finix\Model\CardPresentDetails|null
     */
    public function getCardPresentDetails()
    {
        return $this->container['card_present_details'];
    }

    /**
     * Sets card_present_details
     *
     * @param \Finix\Model\CardPresentDetails|null $card_present_details card_present_details
     *
     * @return self
     */
    public function setCardPresentDetails($card_present_details, $deserialize = false)
    {
        $this->container['card_present_details'] = $card_present_details;

        return $this;
    }

    /**
     * Gets capture_amount
     *
     * @return int|null
     */
    public function getCaptureAmount()
    {
        return $this->container['capture_amount'];
    }

    /**
     * Sets capture_amount
     *
     * @param int|null $capture_amount The amount of the  `Authorization`  you would like to capture in cents. Must be less than or equal to the `amount` of the `Authorization`.
     *
     * @return self
     */
    public function setCaptureAmount($capture_amount, $deserialize = false)
    {
        $this->container['capture_amount'] = $capture_amount;

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
     * Gets device
     *
     * @return string|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string|null $device The ID of the activated device.
     *
     * @return self
     */
    public function setDevice($device, $deserialize = false)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime|null $expires_at Authorization expiration time.
     *
     * @return self
     */
    public function setExpiresAt($expires_at, $deserialize = false)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets external_responses
     *
     * @return \Finix\Model\AuthorizationCapturedExternalResponsesInner[]|null
     */
    public function getExternalResponses()
    {
        return $this->container['external_responses'];
    }

    /**
     * Sets external_responses
     *
     * @param \Finix\Model\AuthorizationCapturedExternalResponsesInner[]|null $external_responses external_responses
     *
     * @return self
     */
    public function setExternalResponses($external_responses, $deserialize = false)
    {
        $this->container['external_responses'] = $external_responses;

        return $this;
    }

    /**
     * Gets failure_code
     *
     * @return string|null
     */
    public function getFailureCode()
    {
        return $this->container['failure_code'];
    }

    /**
     * Sets failure_code
     *
     * @param string|null $failure_code The code of the failure so the decline can be handled programmatically. For more info on how to handle the failure, see [Failure Codes](/guides/developers/errors/#failure-codes).
     *
     * @return self
     */
    public function setFailureCode($failure_code, $deserialize = false)
    {
        $this->container['failure_code'] = $failure_code;

        return $this;
    }

    /**
     * Gets failure_message
     *
     * @return string|null
     */
    public function getFailureMessage()
    {
        return $this->container['failure_message'];
    }

    /**
     * Sets failure_message
     *
     * @param string|null $failure_message A human-readable description of why the transaction was declined. This will also include a suggestion on how to complete the payment.
     *
     * @return self
     */
    public function setFailureMessage($failure_message, $deserialize = false)
    {
        $this->container['failure_message'] = $failure_message;

        return $this;
    }

    /**
     * Gets idempotency_id
     *
     * @return string|null
     */
    public function getIdempotencyId()
    {
        return $this->container['idempotency_id'];
    }

    /**
     * Sets idempotency_id
     *
     * @param string|null $idempotency_id A randomly generated value that'll be associated with the request.
     *
     * @return self
     */
    public function setIdempotencyId($idempotency_id, $deserialize = false)
    {
        $this->container['idempotency_id'] = $idempotency_id;

        return $this;
    }

    /**
     * Gets is_void
     *
     * @return bool|null
     */
    public function getIsVoid()
    {
        return $this->container['is_void'];
    }

    /**
     * Sets is_void
     *
     * @param bool|null $is_void Details if the `Authorization` is void.
     *
     * @return self
     */
    public function setIsVoid($is_void, $deserialize = false)
    {
        $this->container['is_void'] = $is_void;

        return $this;
    }

    /**
     * Gets merchant_identity
     *
     * @return string|null
     */
    public function getMerchantIdentity()
    {
        return $this->container['merchant_identity'];
    }

    /**
     * Sets merchant_identity
     *
     * @param string|null $merchant_identity The ID of the `Merchant` resource the `Authorization` was captured under.
     *
     * @return self
     */
    public function setMerchantIdentity($merchant_identity, $deserialize = false)
    {
        $this->container['merchant_identity'] = $merchant_identity;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return string[]|null
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param string[]|null $messages Message field that provides additional details. This field is typically **null**.
     *
     * @return self
     */
    public function setMessages($messages, $deserialize = false)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets raw
     *
     * @return object|null
     */
    public function getRaw()
    {
        return $this->container['raw'];
    }

    /**
     * Sets raw
     *
     * @param object|null $raw Raw response from the processor.
     *
     * @return self
     */
    public function setRaw($raw, $deserialize = false)
    {
        $this->container['raw'] = $raw;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source ID of the `Payment Instrument` where funds get debited.
     *
     * @return self
     */
    public function setSource($source, $deserialize = false)
    {
        $this->container['source'] = $source;

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
     * @param string|null $state The state of the `Transfer`.
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
     * Gets trace_id
     *
     * @return string|null
     */
    public function getTraceId()
    {
        return $this->container['trace_id'];
    }

    /**
     * Sets trace_id
     *
     * @param string|null $trace_id Trace ID of the `Authorization`. The processor sends back the `trace_id` so you can track the authorization end-to-end.
     *
     * @return self
     */
    public function setTraceId($trace_id, $deserialize = false)
    {
        $this->container['trace_id'] = $trace_id;

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
     * @param string|null $transfer The ID of the `transfer` resource that gets created when the `Authorization` moves to **SUCCEEDED**.
     *
     * @return self
     */
    public function setTransfer($transfer, $deserialize = false)
    {
        $this->container['transfer'] = $transfer;

        return $this;
    }

    /**
     * Gets void_state
     *
     * @return string|null
     */
    public function getVoidState()
    {
        return $this->container['void_state'];
    }

    /**
     * Sets void_state
     *
     * @param string|null $void_state Details if the `Authorization` has been voided.
     *
     * @return self
     */
    public function setVoidState($void_state, $deserialize = false)
    {
        $this->container['void_state'] = $void_state;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \Finix\Model\AuthorizationLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\AuthorizationLinks|null $_links _links
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



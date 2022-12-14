<?php
/**
 * ListTransfersQueryParams
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
 * ListTransfersQueryParams Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListTransfersQueryParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListTransfersQueryParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sort' => 'string',
        'after_cursor' => 'string',
        'limit' => 'int',
        'amount' => 'int',
        'amount_gte' => 'int',
        'amount_gt' => 'int',
        'amount_lte' => 'int',
        'amount_lt' => 'int',
        'created_at_gte' => 'string',
        'created_at_lte' => 'string',
        'idempotency_id' => 'string',
        'id' => 'string',
        'state' => 'string',
        'ready_to_settle_at_gte' => 'string',
        'ready_to_settle_at_lte' => 'string',
        'statement_descriptor' => 'int',
        'trace_id' => 'string',
        'updated_at_gte' => 'string',
        'updated_at_lte' => 'string',
        'instrument_bin' => 'string',
        'instrument_account_last4' => 'string',
        'instrument_brand_type' => 'string',
        'merchant_identity_id' => 'string',
        'merchant_identity_name' => 'string',
        'instrument_name' => 'string',
        'instrument_type' => 'string',
        'merchant_id' => 'string',
        'merchant_mid' => 'string',
        'instrument_card_last4' => 'string',
        'merchant_processor_id' => 'string',
        'type' => 'string',
        'before_cursor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sort' => null,
        'after_cursor' => null,
        'limit' => null,
        'amount' => null,
        'amount_gte' => null,
        'amount_gt' => null,
        'amount_lte' => null,
        'amount_lt' => null,
        'created_at_gte' => null,
        'created_at_lte' => null,
        'idempotency_id' => null,
        'id' => null,
        'state' => null,
        'ready_to_settle_at_gte' => null,
        'ready_to_settle_at_lte' => null,
        'statement_descriptor' => null,
        'trace_id' => null,
        'updated_at_gte' => null,
        'updated_at_lte' => null,
        'instrument_bin' => null,
        'instrument_account_last4' => null,
        'instrument_brand_type' => null,
        'merchant_identity_id' => null,
        'merchant_identity_name' => null,
        'instrument_name' => null,
        'instrument_type' => null,
        'merchant_id' => null,
        'merchant_mid' => null,
        'instrument_card_last4' => null,
        'merchant_processor_id' => null,
        'type' => null,
        'before_cursor' => null
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
        'sort' => 'sort',
        'after_cursor' => 'after_cursor',
        'limit' => 'limit',
        'amount' => 'amount',
        'amount_gte' => 'amount.gte',
        'amount_gt' => 'amount.gt',
        'amount_lte' => 'amount.lte',
        'amount_lt' => 'amount.lt',
        'created_at_gte' => 'created_at.gte',
        'created_at_lte' => 'created_at.lte',
        'idempotency_id' => 'idempotency_id',
        'id' => 'id',
        'state' => 'state',
        'ready_to_settle_at_gte' => 'ready_to_settle_at.gte',
        'ready_to_settle_at_lte' => 'ready_to_settle_at.lte',
        'statement_descriptor' => 'statement_descriptor',
        'trace_id' => 'trace_id',
        'updated_at_gte' => 'updated_at.gte',
        'updated_at_lte' => 'updated_at.lte',
        'instrument_bin' => 'instrument_bin',
        'instrument_account_last4' => 'instrument_account_last4',
        'instrument_brand_type' => 'instrument_brand_type',
        'merchant_identity_id' => 'merchant_identity_id',
        'merchant_identity_name' => 'merchant_identity_name',
        'instrument_name' => 'instrument_name',
        'instrument_type' => 'instrument_type',
        'merchant_id' => 'merchant_id',
        'merchant_mid' => 'merchant_mid',
        'instrument_card_last4' => 'instrument_card_last4',
        'merchant_processor_id' => 'merchant_processor_id',
        'type' => 'type',
        'before_cursor' => 'before_cursor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sort' => 'setSort',
        'after_cursor' => 'setAfterCursor',
        'limit' => 'setLimit',
        'amount' => 'setAmount',
        'amount_gte' => 'setAmountGte',
        'amount_gt' => 'setAmountGt',
        'amount_lte' => 'setAmountLte',
        'amount_lt' => 'setAmountLt',
        'created_at_gte' => 'setCreatedAtGte',
        'created_at_lte' => 'setCreatedAtLte',
        'idempotency_id' => 'setIdempotencyId',
        'id' => 'setId',
        'state' => 'setState',
        'ready_to_settle_at_gte' => 'setReadyToSettleAtGte',
        'ready_to_settle_at_lte' => 'setReadyToSettleAtLte',
        'statement_descriptor' => 'setStatementDescriptor',
        'trace_id' => 'setTraceId',
        'updated_at_gte' => 'setUpdatedAtGte',
        'updated_at_lte' => 'setUpdatedAtLte',
        'instrument_bin' => 'setInstrumentBin',
        'instrument_account_last4' => 'setInstrumentAccountLast4',
        'instrument_brand_type' => 'setInstrumentBrandType',
        'merchant_identity_id' => 'setMerchantIdentityId',
        'merchant_identity_name' => 'setMerchantIdentityName',
        'instrument_name' => 'setInstrumentName',
        'instrument_type' => 'setInstrumentType',
        'merchant_id' => 'setMerchantId',
        'merchant_mid' => 'setMerchantMid',
        'instrument_card_last4' => 'setInstrumentCardLast4',
        'merchant_processor_id' => 'setMerchantProcessorId',
        'type' => 'setType',
        'before_cursor' => 'setBeforeCursor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sort' => 'getSort',
        'after_cursor' => 'getAfterCursor',
        'limit' => 'getLimit',
        'amount' => 'getAmount',
        'amount_gte' => 'getAmountGte',
        'amount_gt' => 'getAmountGt',
        'amount_lte' => 'getAmountLte',
        'amount_lt' => 'getAmountLt',
        'created_at_gte' => 'getCreatedAtGte',
        'created_at_lte' => 'getCreatedAtLte',
        'idempotency_id' => 'getIdempotencyId',
        'id' => 'getId',
        'state' => 'getState',
        'ready_to_settle_at_gte' => 'getReadyToSettleAtGte',
        'ready_to_settle_at_lte' => 'getReadyToSettleAtLte',
        'statement_descriptor' => 'getStatementDescriptor',
        'trace_id' => 'getTraceId',
        'updated_at_gte' => 'getUpdatedAtGte',
        'updated_at_lte' => 'getUpdatedAtLte',
        'instrument_bin' => 'getInstrumentBin',
        'instrument_account_last4' => 'getInstrumentAccountLast4',
        'instrument_brand_type' => 'getInstrumentBrandType',
        'merchant_identity_id' => 'getMerchantIdentityId',
        'merchant_identity_name' => 'getMerchantIdentityName',
        'instrument_name' => 'getInstrumentName',
        'instrument_type' => 'getInstrumentType',
        'merchant_id' => 'getMerchantId',
        'merchant_mid' => 'getMerchantMid',
        'instrument_card_last4' => 'getInstrumentCardLast4',
        'merchant_processor_id' => 'getMerchantProcessorId',
        'type' => 'getType',
        'before_cursor' => 'getBeforeCursor'
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
        $this->container['sort'] = $data['sort'] ?? null;
        $this->container['after_cursor'] = $data['after_cursor'] ?? null;
        $this->container['limit'] = $data['limit'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['amount_gte'] = $data['amount_gte'] ?? null;
        $this->container['amount_gt'] = $data['amount_gt'] ?? null;
        $this->container['amount_lte'] = $data['amount_lte'] ?? null;
        $this->container['amount_lt'] = $data['amount_lt'] ?? null;
        $this->container['created_at_gte'] = $data['created_at_gte'] ?? null;
        $this->container['created_at_lte'] = $data['created_at_lte'] ?? null;
        $this->container['idempotency_id'] = $data['idempotency_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['ready_to_settle_at_gte'] = $data['ready_to_settle_at_gte'] ?? null;
        $this->container['ready_to_settle_at_lte'] = $data['ready_to_settle_at_lte'] ?? null;
        $this->container['statement_descriptor'] = $data['statement_descriptor'] ?? null;
        $this->container['trace_id'] = $data['trace_id'] ?? null;
        $this->container['updated_at_gte'] = $data['updated_at_gte'] ?? null;
        $this->container['updated_at_lte'] = $data['updated_at_lte'] ?? null;
        $this->container['instrument_bin'] = $data['instrument_bin'] ?? null;
        $this->container['instrument_account_last4'] = $data['instrument_account_last4'] ?? null;
        $this->container['instrument_brand_type'] = $data['instrument_brand_type'] ?? null;
        $this->container['merchant_identity_id'] = $data['merchant_identity_id'] ?? null;
        $this->container['merchant_identity_name'] = $data['merchant_identity_name'] ?? null;
        $this->container['instrument_name'] = $data['instrument_name'] ?? null;
        $this->container['instrument_type'] = $data['instrument_type'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['merchant_mid'] = $data['merchant_mid'] ?? null;
        $this->container['instrument_card_last4'] = $data['instrument_card_last4'] ?? null;
        $this->container['merchant_processor_id'] = $data['merchant_processor_id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['before_cursor'] = $data['before_cursor'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets sort
     *
     * @return string|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param string|null $sort Specify key to be used for sorting the collection.
     *
     * @return self
     */
    public function setSort($sort, $deserialize = false)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets after_cursor
     *
     * @return string|null
     */
    public function getAfterCursor()
    {
        return $this->container['after_cursor'];
    }

    /**
     * Sets after_cursor
     *
     * @param string|null $after_cursor Return every resource created after the cursor value.
     *
     * @return self
     */
    public function setAfterCursor($after_cursor, $deserialize = false)
    {
        $this->container['after_cursor'] = $after_cursor;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit The numbers of items to return.
     *
     * @return self
     */
    public function setLimit($limit, $deserialize = false)
    {
        $this->container['limit'] = $limit;

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
     * @param int|null $amount Filter by an amount equal to the given value.
     *
     * @return self
     */
    public function setAmount($amount, $deserialize = false)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_gte
     *
     * @return int|null
     */
    public function getAmountGte()
    {
        return $this->container['amount_gte'];
    }

    /**
     * Sets amount_gte
     *
     * @param int|null $amount_gte Filter by an amount greater than or equal.
     *
     * @return self
     */
    public function setAmountGte($amount_gte, $deserialize = false)
    {
        $this->container['amount_gte'] = $amount_gte;

        return $this;
    }

    /**
     * Gets amount_gt
     *
     * @return int|null
     */
    public function getAmountGt()
    {
        return $this->container['amount_gt'];
    }

    /**
     * Sets amount_gt
     *
     * @param int|null $amount_gt Filter by an amount greater than.
     *
     * @return self
     */
    public function setAmountGt($amount_gt, $deserialize = false)
    {
        $this->container['amount_gt'] = $amount_gt;

        return $this;
    }

    /**
     * Gets amount_lte
     *
     * @return int|null
     */
    public function getAmountLte()
    {
        return $this->container['amount_lte'];
    }

    /**
     * Sets amount_lte
     *
     * @param int|null $amount_lte Filter by an amount less than or equal.
     *
     * @return self
     */
    public function setAmountLte($amount_lte, $deserialize = false)
    {
        $this->container['amount_lte'] = $amount_lte;

        return $this;
    }

    /**
     * Gets amount_lt
     *
     * @return int|null
     */
    public function getAmountLt()
    {
        return $this->container['amount_lt'];
    }

    /**
     * Sets amount_lt
     *
     * @param int|null $amount_lt Filter by an amount less than.
     *
     * @return self
     */
    public function setAmountLt($amount_lt, $deserialize = false)
    {
        $this->container['amount_lt'] = $amount_lt;

        return $this;
    }

    /**
     * Gets created_at_gte
     *
     * @return string|null
     */
    public function getCreatedAtGte()
    {
        return $this->container['created_at_gte'];
    }

    /**
     * Sets created_at_gte
     *
     * @param string|null $created_at_gte Filter where `created_at` is after the given date.
     *
     * @return self
     */
    public function setCreatedAtGte($created_at_gte, $deserialize = false)
    {
        $this->container['created_at_gte'] = $created_at_gte;

        return $this;
    }

    /**
     * Gets created_at_lte
     *
     * @return string|null
     */
    public function getCreatedAtLte()
    {
        return $this->container['created_at_lte'];
    }

    /**
     * Sets created_at_lte
     *
     * @param string|null $created_at_lte Filter where `created_at` is before the given date.
     *
     * @return self
     */
    public function setCreatedAtLte($created_at_lte, $deserialize = false)
    {
        $this->container['created_at_lte'] = $created_at_lte;

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
     * @param string|null $idempotency_id Filter by `idempotency_id`.
     *
     * @return self
     */
    public function setIdempotencyId($idempotency_id, $deserialize = false)
    {
        $this->container['idempotency_id'] = $idempotency_id;

        return $this;
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
     * @param string|null $id Filter by `id`.
     *
     * @return self
     */
    public function setId($id, $deserialize = false)
    {
        $this->container['id'] = $id;

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
     * @param string|null $state Filter by Transaction state.
     *
     * @return self
     */
    public function setState($state, $deserialize = false)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets ready_to_settle_at_gte
     *
     * @return string|null
     */
    public function getReadyToSettleAtGte()
    {
        return $this->container['ready_to_settle_at_gte'];
    }

    /**
     * Sets ready_to_settle_at_gte
     *
     * @param string|null $ready_to_settle_at_gte Filter by `ready_to_settle_at`.
     *
     * @return self
     */
    public function setReadyToSettleAtGte($ready_to_settle_at_gte, $deserialize = false)
    {
        $this->container['ready_to_settle_at_gte'] = $ready_to_settle_at_gte;

        return $this;
    }

    /**
     * Gets ready_to_settle_at_lte
     *
     * @return string|null
     */
    public function getReadyToSettleAtLte()
    {
        return $this->container['ready_to_settle_at_lte'];
    }

    /**
     * Sets ready_to_settle_at_lte
     *
     * @param string|null $ready_to_settle_at_lte Filter by `ready_to_settle_at`.
     *
     * @return self
     */
    public function setReadyToSettleAtLte($ready_to_settle_at_lte, $deserialize = false)
    {
        $this->container['ready_to_settle_at_lte'] = $ready_to_settle_at_lte;

        return $this;
    }

    /**
     * Gets statement_descriptor
     *
     * @return int|null
     */
    public function getStatementDescriptor()
    {
        return $this->container['statement_descriptor'];
    }

    /**
     * Sets statement_descriptor
     *
     * @param int|null $statement_descriptor Filter by `statement_descriptor`.
     *
     * @return self
     */
    public function setStatementDescriptor($statement_descriptor, $deserialize = false)
    {
        $this->container['statement_descriptor'] = $statement_descriptor;

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
     * @param string|null $trace_id Filter by `trace_id`.
     *
     * @return self
     */
    public function setTraceId($trace_id, $deserialize = false)
    {
        $this->container['trace_id'] = $trace_id;

        return $this;
    }

    /**
     * Gets updated_at_gte
     *
     * @return string|null
     */
    public function getUpdatedAtGte()
    {
        return $this->container['updated_at_gte'];
    }

    /**
     * Sets updated_at_gte
     *
     * @param string|null $updated_at_gte Filter where `updated_at` is after the given date.
     *
     * @return self
     */
    public function setUpdatedAtGte($updated_at_gte, $deserialize = false)
    {
        $this->container['updated_at_gte'] = $updated_at_gte;

        return $this;
    }

    /**
     * Gets updated_at_lte
     *
     * @return string|null
     */
    public function getUpdatedAtLte()
    {
        return $this->container['updated_at_lte'];
    }

    /**
     * Sets updated_at_lte
     *
     * @param string|null $updated_at_lte Filter where `updated_at` is before the given date.
     *
     * @return self
     */
    public function setUpdatedAtLte($updated_at_lte, $deserialize = false)
    {
        $this->container['updated_at_lte'] = $updated_at_lte;

        return $this;
    }

    /**
     * Gets instrument_bin
     *
     * @return string|null
     */
    public function getInstrumentBin()
    {
        return $this->container['instrument_bin'];
    }

    /**
     * Sets instrument_bin
     *
     * @param string|null $instrument_bin Filter by Bank Identification Number (BIN). The BIN is the first 6 digits of the masked number.
     *
     * @return self
     */
    public function setInstrumentBin($instrument_bin, $deserialize = false)
    {
        $this->container['instrument_bin'] = $instrument_bin;

        return $this;
    }

    /**
     * Gets instrument_account_last4
     *
     * @return string|null
     */
    public function getInstrumentAccountLast4()
    {
        return $this->container['instrument_account_last4'];
    }

    /**
     * Sets instrument_account_last4
     *
     * @param string|null $instrument_account_last4 Filter Transactions by the last 4 digits of the bank account. The bank account last 4 are the last 4 digits of the masked number instrument_account_last4=9444 BIN.
     *
     * @return self
     */
    public function setInstrumentAccountLast4($instrument_account_last4, $deserialize = false)
    {
        $this->container['instrument_account_last4'] = $instrument_account_last4;

        return $this;
    }

    /**
     * Gets instrument_brand_type
     *
     * @return string|null
     */
    public function getInstrumentBrandType()
    {
        return $this->container['instrument_brand_type'];
    }

    /**
     * Sets instrument_brand_type
     *
     * @param string|null $instrument_brand_type Filter by card brand. Available card brand types can be found in the drop-down.
     *
     * @return self
     */
    public function setInstrumentBrandType($instrument_brand_type, $deserialize = false)
    {
        $this->container['instrument_brand_type'] = $instrument_brand_type;

        return $this;
    }

    /**
     * Gets merchant_identity_id
     *
     * @return string|null
     */
    public function getMerchantIdentityId()
    {
        return $this->container['merchant_identity_id'];
    }

    /**
     * Sets merchant_identity_id
     *
     * @param string|null $merchant_identity_id Filter by `Identity` ID.
     *
     * @return self
     */
    public function setMerchantIdentityId($merchant_identity_id, $deserialize = false)
    {
        $this->container['merchant_identity_id'] = $merchant_identity_id;

        return $this;
    }

    /**
     * Gets merchant_identity_name
     *
     * @return string|null
     */
    public function getMerchantIdentityName()
    {
        return $this->container['merchant_identity_name'];
    }

    /**
     * Sets merchant_identity_name
     *
     * @param string|null $merchant_identity_name Filter Transactions by `Identity` name. The name is not case-sensitive.
     *
     * @return self
     */
    public function setMerchantIdentityName($merchant_identity_name, $deserialize = false)
    {
        $this->container['merchant_identity_name'] = $merchant_identity_name;

        return $this;
    }

    /**
     * Gets instrument_name
     *
     * @return string|null
     */
    public function getInstrumentName()
    {
        return $this->container['instrument_name'];
    }

    /**
     * Sets instrument_name
     *
     * @param string|null $instrument_name Filter Transactions by `Payment Instrument` name.
     *
     * @return self
     */
    public function setInstrumentName($instrument_name, $deserialize = false)
    {
        $this->container['instrument_name'] = $instrument_name;

        return $this;
    }

    /**
     * Gets instrument_type
     *
     * @return string|null
     */
    public function getInstrumentType()
    {
        return $this->container['instrument_type'];
    }

    /**
     * Sets instrument_type
     *
     * @param string|null $instrument_type Filter Transactions by `Payment Instrument` type. Available instrument types include: Bank Account or Payment Card
     *
     * @return self
     */
    public function setInstrumentType($instrument_type, $deserialize = false)
    {
        $this->container['instrument_type'] = $instrument_type;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string|null $merchant_id Filter by `Merchant` ID.
     *
     * @return self
     */
    public function setMerchantId($merchant_id, $deserialize = false)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets merchant_mid
     *
     * @return string|null
     */
    public function getMerchantMid()
    {
        return $this->container['merchant_mid'];
    }

    /**
     * Sets merchant_mid
     *
     * @param string|null $merchant_mid Filter by Merchant Identification Number (MID).
     *
     * @return self
     */
    public function setMerchantMid($merchant_mid, $deserialize = false)
    {
        $this->container['merchant_mid'] = $merchant_mid;

        return $this;
    }

    /**
     * Gets instrument_card_last4
     *
     * @return string|null
     */
    public function getInstrumentCardLast4()
    {
        return $this->container['instrument_card_last4'];
    }

    /**
     * Sets instrument_card_last4
     *
     * @param string|null $instrument_card_last4 Filter by the payment card last 4 digits.
     *
     * @return self
     */
    public function setInstrumentCardLast4($instrument_card_last4, $deserialize = false)
    {
        $this->container['instrument_card_last4'] = $instrument_card_last4;

        return $this;
    }

    /**
     * Gets merchant_processor_id
     *
     * @return string|null
     */
    public function getMerchantProcessorId()
    {
        return $this->container['merchant_processor_id'];
    }

    /**
     * Sets merchant_processor_id
     *
     * @param string|null $merchant_processor_id Filter by `Processor` ID.
     *
     * @return self
     */
    public function setMerchantProcessorId($merchant_processor_id, $deserialize = false)
    {
        $this->container['merchant_processor_id'] = $merchant_processor_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Filter by `Transfer` type. Available type filters include: All, Debits, Refunds, or Credits.
     *
     * @return self
     */
    public function setType($type, $deserialize = false)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets before_cursor
     *
     * @return string|null
     */
    public function getBeforeCursor()
    {
        return $this->container['before_cursor'];
    }

    /**
     * Sets before_cursor
     *
     * @param string|null $before_cursor Return every resource created before the cursor value.
     *
     * @return self
     */
    public function setBeforeCursor($before_cursor, $deserialize = false)
    {
        $this->container['before_cursor'] = $before_cursor;

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



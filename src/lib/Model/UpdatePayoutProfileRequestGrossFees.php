<?php
/**
 * UpdatePayoutProfileRequestGrossFees
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
 * UpdatePayoutProfileRequestGrossFees Class Doc Comment
 *
 * @category Class
 * @description Configures the details of how fees get debited.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdatePayoutProfileRequestGrossFees implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdatePayoutProfileRequest_gross_fees';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'day_of_month' => 'int',
        'frequency' => 'string',
        'payment_instrument_id' => 'string',
        'rail' => 'string',
        'submission_delay_days' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'day_of_month' => null,
        'frequency' => null,
        'payment_instrument_id' => null,
        'rail' => null,
        'submission_delay_days' => null
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
        'day_of_month' => 'day_of_month',
        'frequency' => 'frequency',
        'payment_instrument_id' => 'payment_instrument_id',
        'rail' => 'rail',
        'submission_delay_days' => 'submission_delay_days'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'day_of_month' => 'setDayOfMonth',
        'frequency' => 'setFrequency',
        'payment_instrument_id' => 'setPaymentInstrumentId',
        'rail' => 'setRail',
        'submission_delay_days' => 'setSubmissionDelayDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'day_of_month' => 'getDayOfMonth',
        'frequency' => 'getFrequency',
        'payment_instrument_id' => 'getPaymentInstrumentId',
        'rail' => 'getRail',
        'submission_delay_days' => 'getSubmissionDelayDays'
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

    public const FREQUENCY_DAILY = 'DAILY';
    public const FREQUENCY_MONTHLY = 'MONTHLY';
    public const FREQUENCY_CUSTOM = 'CUSTOM';
    public const RAIL_NEXT_DAY_ACH = 'NEXT_DAY_ACH';
    public const RAIL_SAME_DAY_ACH = 'SAME_DAY_ACH';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_DAILY,
            self::FREQUENCY_MONTHLY,
            self::FREQUENCY_CUSTOM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRailAllowableValues()
    {
        return [
            self::RAIL_NEXT_DAY_ACH,
            self::RAIL_SAME_DAY_ACH,
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
        $this->container['day_of_month'] = $data['day_of_month'] ?? null;
        $this->container['frequency'] = $data['frequency'] ?? null;
        $this->container['payment_instrument_id'] = $data['payment_instrument_id'] ?? null;
        $this->container['rail'] = $data['rail'] ?? null;
        $this->container['submission_delay_days'] = $data['submission_delay_days'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'frequency', must be one of '%s'",
                $this->container['frequency'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRailAllowableValues();
        if (!is_null($this->container['rail']) && !in_array($this->container['rail'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rail', must be one of '%s'",
                $this->container['rail'],
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
     * Gets day_of_month
     *
     * @return int|null
     */
    public function getDayOfMonth()
    {
        return $this->container['day_of_month'];
    }

    /**
     * Sets day_of_month
     *
     * @param int|null $day_of_month Day of the month fees get debited. Required when `frequency` is set to **MONTHLY**.
     *
     * @return self
     */
    public function setDayOfMonth($day_of_month, $deserialize = false)
    {
        $this->container['day_of_month'] = $day_of_month;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string|null $frequency Configures how frequentyly **fees** get debited. To configure a **CUSTOM** `frequency` [contact Finix Support](/guides/payouts/).
     *
     * @return self
     */
    public function setFrequency($frequency, $deserialize = false)
    {
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($frequency) && !in_array($frequency, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'frequency', must be one of '%s'",
                    $frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets payment_instrument_id
     *
     * @return string|null
     */
    public function getPaymentInstrumentId()
    {
        return $this->container['payment_instrument_id'];
    }

    /**
     * Sets payment_instrument_id
     *
     * @param string|null $payment_instrument_id The `id` of the `Payment Instrument`that **fees** get debited from.
     *
     * @return self
     */
    public function setPaymentInstrumentId($payment_instrument_id, $deserialize = false)
    {
        $this->container['payment_instrument_id'] = $payment_instrument_id;

        return $this;
    }

    /**
     * Gets rail
     *
     * @return string|null
     */
    public function getRail()
    {
        return $this->container['rail'];
    }

    /**
     * Sets rail
     *
     * @param string|null $rail Configures how quickly and which payment `rail` will be used to debit **fees**.
     *
     * @return self
     */
    public function setRail($rail, $deserialize = false)
    {
        $allowedValues = $this->getRailAllowableValues();
        if (!is_null($rail) && !in_array($rail, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rail', must be one of '%s'",
                    $rail,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rail'] = $rail;

        return $this;
    }

    /**
     * Gets submission_delay_days
     *
     * @return int|null
     */
    public function getSubmissionDelayDays()
    {
        return $this->container['submission_delay_days'];
    }

    /**
     * Sets submission_delay_days
     *
     * @param int|null $submission_delay_days Include a number of `submission_delay_days` to delay when `funding_transfers` for `fees` will get submitted to debit (in days) the `payment_instrument_id`.
     *
     * @return self
     */
    public function setSubmissionDelayDays($submission_delay_days, $deserialize = false)
    {
        $this->container['submission_delay_days'] = $submission_delay_days;

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



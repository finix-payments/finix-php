<?php
/**
 * AdditionalPurchaseDataItemDataInner
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
 * AdditionalPurchaseDataItemDataInner Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AdditionalPurchaseDataItemDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalPurchaseData_item_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount_excluding_sales_tax' => 'int',
        'amount_including_sales_tax' => 'int',
        'commodity_code' => 'string',
        'cost_per_unit' => 'int',
        'item_description' => 'string',
        'item_discount_amount' => 'int',
        'merchant_product_code' => 'string',
        'quantity' => 'int',
        'unit_of_measure' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount_excluding_sales_tax' => null,
        'amount_including_sales_tax' => null,
        'commodity_code' => null,
        'cost_per_unit' => null,
        'item_description' => null,
        'item_discount_amount' => null,
        'merchant_product_code' => null,
        'quantity' => null,
        'unit_of_measure' => null
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
        'amount_excluding_sales_tax' => 'amount_excluding_sales_tax',
        'amount_including_sales_tax' => 'amount_including_sales_tax',
        'commodity_code' => 'commodity_code',
        'cost_per_unit' => 'cost_per_unit',
        'item_description' => 'item_description',
        'item_discount_amount' => 'item_discount_amount',
        'merchant_product_code' => 'merchant_product_code',
        'quantity' => 'quantity',
        'unit_of_measure' => 'unit_of_measure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_excluding_sales_tax' => 'setAmountExcludingSalesTax',
        'amount_including_sales_tax' => 'setAmountIncludingSalesTax',
        'commodity_code' => 'setCommodityCode',
        'cost_per_unit' => 'setCostPerUnit',
        'item_description' => 'setItemDescription',
        'item_discount_amount' => 'setItemDiscountAmount',
        'merchant_product_code' => 'setMerchantProductCode',
        'quantity' => 'setQuantity',
        'unit_of_measure' => 'setUnitOfMeasure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_excluding_sales_tax' => 'getAmountExcludingSalesTax',
        'amount_including_sales_tax' => 'getAmountIncludingSalesTax',
        'commodity_code' => 'getCommodityCode',
        'cost_per_unit' => 'getCostPerUnit',
        'item_description' => 'getItemDescription',
        'item_discount_amount' => 'getItemDiscountAmount',
        'merchant_product_code' => 'getMerchantProductCode',
        'quantity' => 'getQuantity',
        'unit_of_measure' => 'getUnitOfMeasure'
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
        $this->container['amount_excluding_sales_tax'] = $data['amount_excluding_sales_tax'] ?? null;
        $this->container['amount_including_sales_tax'] = $data['amount_including_sales_tax'] ?? null;
        $this->container['commodity_code'] = $data['commodity_code'] ?? null;
        $this->container['cost_per_unit'] = $data['cost_per_unit'] ?? null;
        $this->container['item_description'] = $data['item_description'] ?? null;
        $this->container['item_discount_amount'] = $data['item_discount_amount'] ?? null;
        $this->container['merchant_product_code'] = $data['merchant_product_code'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['unit_of_measure'] = $data['unit_of_measure'] ?? null;
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
     * Gets amount_excluding_sales_tax
     *
     * @return int|null
     */
    public function getAmountExcludingSalesTax()
    {
        return $this->container['amount_excluding_sales_tax'];
    }

    /**
     * Sets amount_excluding_sales_tax
     *
     * @param int|null $amount_excluding_sales_tax Total cost in cents of the line item excluding tax.
     *
     * @return self
     */
    public function setAmountExcludingSalesTax($amount_excluding_sales_tax, $deserialize = false)
    {
        $this->container['amount_excluding_sales_tax'] = $amount_excluding_sales_tax;

        return $this;
    }

    /**
     * Gets amount_including_sales_tax
     *
     * @return int|null
     */
    public function getAmountIncludingSalesTax()
    {
        return $this->container['amount_including_sales_tax'];
    }

    /**
     * Sets amount_including_sales_tax
     *
     * @param int|null $amount_including_sales_tax Total cost in cents of the line item including tax.
     *
     * @return self
     */
    public function setAmountIncludingSalesTax($amount_including_sales_tax, $deserialize = false)
    {
        $this->container['amount_including_sales_tax'] = $amount_including_sales_tax;

        return $this;
    }

    /**
     * Gets commodity_code
     *
     * @return string|null
     */
    public function getCommodityCode()
    {
        return $this->container['commodity_code'];
    }

    /**
     * Sets commodity_code
     *
     * @param string|null $commodity_code A commodity code is a numeric code representing a particular product or service as defined by the National Institute of Governmental Purchasing. The code can be 3, 5, 7, or 11 digits in length. The longer the code the more granular the description of the product/service. (max 12 characters).
     *
     * @return self
     */
    public function setCommodityCode($commodity_code, $deserialize = false)
    {
        $this->container['commodity_code'] = $commodity_code;

        return $this;
    }

    /**
     * Gets cost_per_unit
     *
     * @return int|null
     */
    public function getCostPerUnit()
    {
        return $this->container['cost_per_unit'];
    }

    /**
     * Sets cost_per_unit
     *
     * @param int|null $cost_per_unit The price in cents of one unit of the item purchased
     *
     * @return self
     */
    public function setCostPerUnit($cost_per_unit, $deserialize = false)
    {
        $this->container['cost_per_unit'] = $cost_per_unit;

        return $this;
    }

    /**
     * Gets item_description
     *
     * @return string|null
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description
     *
     * @param string|null $item_description Required when `item_data` is supplied (max 25 characters)
     *
     * @return self
     */
    public function setItemDescription($item_description, $deserialize = false)
    {
        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets item_discount_amount
     *
     * @return int|null
     */
    public function getItemDiscountAmount()
    {
        return $this->container['item_discount_amount'];
    }

    /**
     * Sets item_discount_amount
     *
     * @param int|null $item_discount_amount Item discount amount in cents
     *
     * @return self
     */
    public function setItemDiscountAmount($item_discount_amount, $deserialize = false)
    {
        $this->container['item_discount_amount'] = $item_discount_amount;

        return $this;
    }

    /**
     * Gets merchant_product_code
     *
     * @return string|null
     */
    public function getMerchantProductCode()
    {
        return $this->container['merchant_product_code'];
    }

    /**
     * Sets merchant_product_code
     *
     * @param string|null $merchant_product_code Merchant defined product code (max 12 characters).
     *
     * @return self
     */
    public function setMerchantProductCode($merchant_product_code, $deserialize = false)
    {
        $this->container['merchant_product_code'] = $merchant_product_code;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The number of items purchased. Must be greater than 0.
     *
     * @return self
     */
    public function setQuantity($quantity, $deserialize = false)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_of_measure
     *
     * @return string|null
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure
     *
     * @param string|null $unit_of_measure The unit of measure of the purchased item (max 3 characters).
     *
     * @return self
     */
    public function setUnitOfMeasure($unit_of_measure, $deserialize = false)
    {
        $this->container['unit_of_measure'] = $unit_of_measure;

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



<?php
/**
 * AdditionalPurchaseData
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
 * AdditionalPurchaseData Class Doc Comment
 *
 * @category Class
 * @description Additional information about the purchase. Used for Level 2 and Level 3 Processing.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AdditionalPurchaseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalPurchaseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_reference_number' => 'string',
        'customs_duty_amount' => 'int',
        'destination_country_code' => 'string',
        'destination_postal_code' => 'string',
        'discount_amount' => 'int',
        'invoice_reference_number' => 'string',
        'item_data' => '\Finix\Model\AdditionalPurchaseDataItemDataInner[]',
        'order_date' => '\Finix\Model\AdditionalPurchaseDataOrderDate',
        'sales_tax' => 'int',
        'ship_from_postal_code' => 'string',
        'shipping_amount' => 'int',
        'tax_exempt' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_reference_number' => null,
        'customs_duty_amount' => null,
        'destination_country_code' => null,
        'destination_postal_code' => null,
        'discount_amount' => null,
        'invoice_reference_number' => null,
        'item_data' => null,
        'order_date' => null,
        'sales_tax' => null,
        'ship_from_postal_code' => null,
        'shipping_amount' => null,
        'tax_exempt' => null
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
        'customer_reference_number' => 'customer_reference_number',
        'customs_duty_amount' => 'customs_duty_amount',
        'destination_country_code' => 'destination_country_code',
        'destination_postal_code' => 'destination_postal_code',
        'discount_amount' => 'discount_amount',
        'invoice_reference_number' => 'invoice_reference_number',
        'item_data' => 'item_data',
        'order_date' => 'order_date',
        'sales_tax' => 'sales_tax',
        'ship_from_postal_code' => 'ship_from_postal_code',
        'shipping_amount' => 'shipping_amount',
        'tax_exempt' => 'tax_exempt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_reference_number' => 'setCustomerReferenceNumber',
        'customs_duty_amount' => 'setCustomsDutyAmount',
        'destination_country_code' => 'setDestinationCountryCode',
        'destination_postal_code' => 'setDestinationPostalCode',
        'discount_amount' => 'setDiscountAmount',
        'invoice_reference_number' => 'setInvoiceReferenceNumber',
        'item_data' => 'setItemData',
        'order_date' => 'setOrderDate',
        'sales_tax' => 'setSalesTax',
        'ship_from_postal_code' => 'setShipFromPostalCode',
        'shipping_amount' => 'setShippingAmount',
        'tax_exempt' => 'setTaxExempt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_reference_number' => 'getCustomerReferenceNumber',
        'customs_duty_amount' => 'getCustomsDutyAmount',
        'destination_country_code' => 'getDestinationCountryCode',
        'destination_postal_code' => 'getDestinationPostalCode',
        'discount_amount' => 'getDiscountAmount',
        'invoice_reference_number' => 'getInvoiceReferenceNumber',
        'item_data' => 'getItemData',
        'order_date' => 'getOrderDate',
        'sales_tax' => 'getSalesTax',
        'ship_from_postal_code' => 'getShipFromPostalCode',
        'shipping_amount' => 'getShippingAmount',
        'tax_exempt' => 'getTaxExempt'
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
        $this->container['customer_reference_number'] = $data['customer_reference_number'] ?? null;
        $this->container['customs_duty_amount'] = $data['customs_duty_amount'] ?? null;
        $this->container['destination_country_code'] = $data['destination_country_code'] ?? null;
        $this->container['destination_postal_code'] = $data['destination_postal_code'] ?? null;
        $this->container['discount_amount'] = $data['discount_amount'] ?? null;
        $this->container['invoice_reference_number'] = $data['invoice_reference_number'] ?? null;
        $this->container['item_data'] = $data['item_data'] ?? null;
        $this->container['order_date'] = $data['order_date'] ?? null;
        $this->container['sales_tax'] = $data['sales_tax'] ?? null;
        $this->container['ship_from_postal_code'] = $data['ship_from_postal_code'] ?? null;
        $this->container['shipping_amount'] = $data['shipping_amount'] ?? null;
        $this->container['tax_exempt'] = $data['tax_exempt'] ?? null;
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
     * Gets customer_reference_number
     *
     * @return string|null
     */
    public function getCustomerReferenceNumber()
    {
        return $this->container['customer_reference_number'];
    }

    /**
     * Sets customer_reference_number
     *
     * @param string|null $customer_reference_number The customer reference for the purchase (max 17 characters).
     *
     * @return self
     */
    public function setCustomerReferenceNumber($customer_reference_number, $deserialize = false)
    {
        $this->container['customer_reference_number'] = $customer_reference_number;

        return $this;
    }

    /**
     * Gets customs_duty_amount
     *
     * @return int|null
     */
    public function getCustomsDutyAmount()
    {
        return $this->container['customs_duty_amount'];
    }

    /**
     * Sets customs_duty_amount
     *
     * @param int|null $customs_duty_amount The duty in cents on the total purchase amount for the order
     *
     * @return self
     */
    public function setCustomsDutyAmount($customs_duty_amount, $deserialize = false)
    {
        $this->container['customs_duty_amount'] = $customs_duty_amount;

        return $this;
    }

    /**
     * Gets destination_country_code
     *
     * @return string|null
     */
    public function getDestinationCountryCode()
    {
        return $this->container['destination_country_code'];
    }

    /**
     * Sets destination_country_code
     *
     * @param string|null $destination_country_code The ISO country code of the order destination.
     *
     * @return self
     */
    public function setDestinationCountryCode($destination_country_code, $deserialize = false)
    {
        $this->container['destination_country_code'] = $destination_country_code;

        return $this;
    }

    /**
     * Gets destination_postal_code
     *
     * @return string|null
     */
    public function getDestinationPostalCode()
    {
        return $this->container['destination_postal_code'];
    }

    /**
     * Sets destination_postal_code
     *
     * @param string|null $destination_postal_code The postal code of the order destination (10 characters)
     *
     * @return self
     */
    public function setDestinationPostalCode($destination_postal_code, $deserialize = false)
    {
        $this->container['destination_postal_code'] = $destination_postal_code;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return int|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param int|null $discount_amount The amount in cents of the discount for the order.
     *
     * @return self
     */
    public function setDiscountAmount($discount_amount, $deserialize = false)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets invoice_reference_number
     *
     * @return string|null
     */
    public function getInvoiceReferenceNumber()
    {
        return $this->container['invoice_reference_number'];
    }

    /**
     * Sets invoice_reference_number
     *
     * @param string|null $invoice_reference_number The order's invoice number (max 15 characters)
     *
     * @return self
     */
    public function setInvoiceReferenceNumber($invoice_reference_number, $deserialize = false)
    {
        $this->container['invoice_reference_number'] = $invoice_reference_number;

        return $this;
    }

    /**
     * Gets item_data
     *
     * @return \Finix\Model\AdditionalPurchaseDataItemDataInner[]|null
     */
    public function getItemData()
    {
        return $this->container['item_data'];
    }

    /**
     * Sets item_data
     *
     * @param \Finix\Model\AdditionalPurchaseDataItemDataInner[]|null $item_data Additional information about the transaction. Used for Level 2 and Level 3 Processing.
     *
     * @return self
     */
    public function setItemData($item_data, $deserialize = false)
    {
        $this->container['item_data'] = $item_data;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return \Finix\Model\AdditionalPurchaseDataOrderDate|null
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param \Finix\Model\AdditionalPurchaseDataOrderDate|null $order_date order_date
     *
     * @return self
     */
    public function setOrderDate($order_date, $deserialize = false)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets sales_tax
     *
     * @return int|null
     */
    public function getSalesTax()
    {
        return $this->container['sales_tax'];
    }

    /**
     * Sets sales_tax
     *
     * @param int|null $sales_tax Total aggregate tax amount in cents for the entire purchase. Field is automatically calculated if you pass in the itemized tax amounts.   For non-taxable transactions either set `sales_tax` to 0 or omit from payload and also set `tax_exempt` to **True**.
     *
     * @return self
     */
    public function setSalesTax($sales_tax, $deserialize = false)
    {
        $this->container['sales_tax'] = $sales_tax;

        return $this;
    }

    /**
     * Gets ship_from_postal_code
     *
     * @return string|null
     */
    public function getShipFromPostalCode()
    {
        return $this->container['ship_from_postal_code'];
    }

    /**
     * Sets ship_from_postal_code
     *
     * @param string|null $ship_from_postal_code The postal code from where order is shipped (10 characters)
     *
     * @return self
     */
    public function setShipFromPostalCode($ship_from_postal_code, $deserialize = false)
    {
        $this->container['ship_from_postal_code'] = $ship_from_postal_code;

        return $this;
    }

    /**
     * Gets shipping_amount
     *
     * @return int|null
     */
    public function getShippingAmount()
    {
        return $this->container['shipping_amount'];
    }

    /**
     * Sets shipping_amount
     *
     * @param int|null $shipping_amount The shipping cost in cents for the order.
     *
     * @return self
     */
    public function setShippingAmount($shipping_amount, $deserialize = false)
    {
        $this->container['shipping_amount'] = $shipping_amount;

        return $this;
    }

    /**
     * Gets tax_exempt
     *
     * @return bool|null
     */
    public function getTaxExempt()
    {
        return $this->container['tax_exempt'];
    }

    /**
     * Sets tax_exempt
     *
     * @param bool|null $tax_exempt For tax exempt purchases set to True.
     *
     * @return self
     */
    public function setTaxExempt($tax_exempt, $deserialize = false)
    {
        $this->container['tax_exempt'] = $tax_exempt;

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



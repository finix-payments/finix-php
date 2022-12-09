<?php
/**
 * CreateOnboardingFormRequest
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
 * CreateOnboardingFormRequest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateOnboardingFormRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateOnboardingFormRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'onboarding_data' => '\Finix\Model\OnboardingFormOnboardingData',
        'merchant_processors' => '\Finix\Model\CreateOnboardingFormRequestMerchantProcessorsInner[]',
        'onboarding_link_details' => '\Finix\Model\CreateOnboardingFormRequestOnboardingLinkDetails',
        'tags' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'onboarding_data' => null,
        'merchant_processors' => null,
        'onboarding_link_details' => null,
        'tags' => null
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
        'onboarding_data' => 'onboarding_data',
        'merchant_processors' => 'merchant_processors',
        'onboarding_link_details' => 'onboarding_link_details',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'onboarding_data' => 'setOnboardingData',
        'merchant_processors' => 'setMerchantProcessors',
        'onboarding_link_details' => 'setOnboardingLinkDetails',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'onboarding_data' => 'getOnboardingData',
        'merchant_processors' => 'getMerchantProcessors',
        'onboarding_link_details' => 'getOnboardingLinkDetails',
        'tags' => 'getTags'
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
        $this->container['onboarding_data'] = $data['onboarding_data'] ?? null;
        $this->container['merchant_processors'] = $data['merchant_processors'] ?? null;
        $this->container['onboarding_link_details'] = $data['onboarding_link_details'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
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
     * Gets onboarding_data
     *
     * @return \Finix\Model\OnboardingFormOnboardingData|null
     */
    public function getOnboardingData()
    {
        return $this->container['onboarding_data'];
    }

    /**
     * Sets onboarding_data
     *
     * @param \Finix\Model\OnboardingFormOnboardingData|null $onboarding_data onboarding_data
     *
     * @return self
     */
    public function setOnboardingData($onboarding_data, $deserialize = false)
    {
        $this->container['onboarding_data'] = $onboarding_data;

        return $this;
    }

    /**
     * Gets merchant_processors
     *
     * @return \Finix\Model\CreateOnboardingFormRequestMerchantProcessorsInner[]|null
     */
    public function getMerchantProcessors()
    {
        return $this->container['merchant_processors'];
    }

    /**
     * Sets merchant_processors
     *
     * @param \Finix\Model\CreateOnboardingFormRequestMerchantProcessorsInner[]|null $merchant_processors An array of objects with the processors and gateways users will be onboarded to.
     *
     * @return self
     */
    public function setMerchantProcessors($merchant_processors, $deserialize = false)
    {
        $this->container['merchant_processors'] = $merchant_processors;

        return $this;
    }

    /**
     * Gets onboarding_link_details
     *
     * @return \Finix\Model\CreateOnboardingFormRequestOnboardingLinkDetails|null
     */
    public function getOnboardingLinkDetails()
    {
        return $this->container['onboarding_link_details'];
    }

    /**
     * Sets onboarding_link_details
     *
     * @param \Finix\Model\CreateOnboardingFormRequestOnboardingLinkDetails|null $onboarding_link_details onboarding_link_details
     *
     * @return self
     */
    public function setOnboardingLinkDetails($onboarding_link_details, $deserialize = false)
    {
        $this->container['onboarding_link_details'] = $onboarding_link_details;

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



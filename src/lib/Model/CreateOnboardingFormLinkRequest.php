<?php
/**
 * CreateOnboardingFormLinkRequest
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
 * CreateOnboardingFormLinkRequest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateOnboardingFormLinkRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateOnboardingFormLinkRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expiration_in_minutes' => 'int',
        'expired_session_url' => 'string',
        'fee_details_url' => 'string',
        'return_url' => 'string',
        'terms_of_service_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'expiration_in_minutes' => null,
        'expired_session_url' => null,
        'fee_details_url' => null,
        'return_url' => null,
        'terms_of_service_url' => null
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
        'expiration_in_minutes' => 'expiration_in_minutes',
        'expired_session_url' => 'expired_session_url',
        'fee_details_url' => 'fee_details_url',
        'return_url' => 'return_url',
        'terms_of_service_url' => 'terms_of_service_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expiration_in_minutes' => 'setExpirationInMinutes',
        'expired_session_url' => 'setExpiredSessionUrl',
        'fee_details_url' => 'setFeeDetailsUrl',
        'return_url' => 'setReturnUrl',
        'terms_of_service_url' => 'setTermsOfServiceUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expiration_in_minutes' => 'getExpirationInMinutes',
        'expired_session_url' => 'getExpiredSessionUrl',
        'fee_details_url' => 'getFeeDetailsUrl',
        'return_url' => 'getReturnUrl',
        'terms_of_service_url' => 'getTermsOfServiceUrl'
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
        $this->container['expiration_in_minutes'] = $data['expiration_in_minutes'] ?? null;
        $this->container['expired_session_url'] = $data['expired_session_url'] ?? null;
        $this->container['fee_details_url'] = $data['fee_details_url'] ?? null;
        $this->container['return_url'] = $data['return_url'] ?? null;
        $this->container['terms_of_service_url'] = $data['terms_of_service_url'] ?? null;
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
     * Gets expiration_in_minutes
     *
     * @return int|null
     */
    public function getExpirationInMinutes()
    {
        return $this->container['expiration_in_minutes'];
    }

    /**
     * Sets expiration_in_minutes
     *
     * @param int|null $expiration_in_minutes How long (in minutes) the link is valid for.
     *
     * @return self
     */
    public function setExpirationInMinutes($expiration_in_minutes, $deserialize = false)
    {
        $this->container['expiration_in_minutes'] = $expiration_in_minutes;

        return $this;
    }

    /**
     * Gets expired_session_url
     *
     * @return string|null
     */
    public function getExpiredSessionUrl()
    {
        return $this->container['expired_session_url'];
    }

    /**
     * Sets expired_session_url
     *
     * @param string|null $expired_session_url The URL users get sent to if the bearer token expires.
     *
     * @return self
     */
    public function setExpiredSessionUrl($expired_session_url, $deserialize = false)
    {
        $this->container['expired_session_url'] = $expired_session_url;

        return $this;
    }

    /**
     * Gets fee_details_url
     *
     * @return string|null
     */
    public function getFeeDetailsUrl()
    {
        return $this->container['fee_details_url'];
    }

    /**
     * Sets fee_details_url
     *
     * @param string|null $fee_details_url The URL of the page where you display the fees related to processing payments (for more info, see [Displaying Processing Fees](/guides/onboarding/onboarding-form/#displaying-processing-fees)).
     *
     * @return self
     */
    public function setFeeDetailsUrl($fee_details_url, $deserialize = false)
    {
        $this->container['fee_details_url'] = $fee_details_url;

        return $this;
    }

    /**
     * Gets return_url
     *
     * @return string|null
     */
    public function getReturnUrl()
    {
        return $this->container['return_url'];
    }

    /**
     * Sets return_url
     *
     * @param string|null $return_url The URL users get sent to after completing the onboarding flow.
     *
     * @return self
     */
    public function setReturnUrl($return_url, $deserialize = false)
    {
        $this->container['return_url'] = $return_url;

        return $this;
    }

    /**
     * Gets terms_of_service_url
     *
     * @return string|null
     */
    public function getTermsOfServiceUrl()
    {
        return $this->container['terms_of_service_url'];
    }

    /**
     * Sets terms_of_service_url
     *
     * @param string|null $terms_of_service_url Your Terms of Service URL. The URL is provided to users for consent along with Finix's Terms of Service.
     *
     * @return self
     */
    public function setTermsOfServiceUrl($terms_of_service_url, $deserialize = false)
    {
        $this->container['terms_of_service_url'] = $terms_of_service_url;

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



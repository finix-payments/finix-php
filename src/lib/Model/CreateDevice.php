<?php
/**
 * CreateDevice
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
 * CreateDevice Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateDevice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateDevice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'configuration' => '\Finix\Model\ConfigurationDetails',
        'description' => 'string',
        'model' => 'string',
        'name' => 'string',
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
        'configuration' => null,
        'description' => null,
        'model' => null,
        'name' => null,
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
        'configuration' => 'configuration',
        'description' => 'description',
        'model' => 'model',
        'name' => 'name',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'configuration' => 'setConfiguration',
        'description' => 'setDescription',
        'model' => 'setModel',
        'name' => 'setName',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'configuration' => 'getConfiguration',
        'description' => 'getDescription',
        'model' => 'getModel',
        'name' => 'getName',
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

    public const MODEL_BBPOS = 'BBPOS';
    public const MODEL_MX915 = 'MX915';
    public const MODEL_MX925 = 'MX925';
    public const MODEL_IPP320 = 'IPP320';
    public const MODEL_IPP350 = 'IPP350';
    public const MODEL_ISC250 = 'ISC250';
    public const MODEL_ISC480 = 'ISC480';
    public const MODEL_ISMP4 = 'ISMP4';
    public const MODEL_ANDROID = 'ANDROID';
    public const MODEL_LANE_3000 = 'LANE_3000';
    public const MODEL_LINK_2500 = 'LINK_2500';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModelAllowableValues()
    {
        return [
            self::MODEL_BBPOS,
            self::MODEL_MX915,
            self::MODEL_MX925,
            self::MODEL_IPP320,
            self::MODEL_IPP350,
            self::MODEL_ISC250,
            self::MODEL_ISC480,
            self::MODEL_ISMP4,
            self::MODEL_ANDROID,
            self::MODEL_LANE_3000,
            self::MODEL_LINK_2500,
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
        $this->container['configuration'] = $data['configuration'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
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

        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
        $allowedValues = $this->getModelAllowableValues();
        if (!is_null($this->container['model']) && !in_array($this->container['model'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'model', must be one of '%s'",
                $this->container['model'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets configuration
     *
     * @return \Finix\Model\ConfigurationDetails|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \Finix\Model\ConfigurationDetails|null $configuration configuration
     *
     * @return self
     */
    public function setConfiguration($configuration, $deserialize = false)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Additional information about device (e.g. self serving terminal).
     *
     * @return self
     */
    public function setDescription($description, $deserialize = false)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model The model type of the device.
     *
     * @return self
     */
    public function setModel($model, $deserialize = false)
    {
        $allowedValues = $this->getModelAllowableValues();
        if (!in_array($model, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'model', must be one of '%s'",
                    $model,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the `Device`.
     *
     * @return self
     */
    public function setName($name, $deserialize = false)
    {
        $this->container['name'] = $name;

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



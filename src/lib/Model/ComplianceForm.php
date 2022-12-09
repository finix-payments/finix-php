<?php
/**
 * ComplianceForm
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
 * ComplianceForm Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ComplianceForm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ComplianceForm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'compliance_form_template' => 'string',
        'due_at' => '\DateTime',
        'files' => '\Finix\Model\ComplianceFormFiles',
        'linked_to' => 'string',
        'linked_type' => 'string',
        'pci_saq_a' => '\Finix\Model\ComplianceFormPciSaqA',
        'state' => 'string',
        'tags' => 'array<string,string>',
        'type' => 'string',
        'valid_from' => '\DateTime',
        'valid_until' => 'string',
        'version' => 'string'
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
        'compliance_form_template' => null,
        'due_at' => 'date-time',
        'files' => null,
        'linked_to' => null,
        'linked_type' => null,
        'pci_saq_a' => null,
        'state' => null,
        'tags' => null,
        'type' => null,
        'valid_from' => 'date-time',
        'valid_until' => null,
        'version' => null
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
        'compliance_form_template' => 'compliance_form_template',
        'due_at' => 'due_at',
        'files' => 'files',
        'linked_to' => 'linked_to',
        'linked_type' => 'linked_type',
        'pci_saq_a' => 'pci_saq_a',
        'state' => 'state',
        'tags' => 'tags',
        'type' => 'type',
        'valid_from' => 'valid_from',
        'valid_until' => 'valid_until',
        'version' => 'version'
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
        'compliance_form_template' => 'setComplianceFormTemplate',
        'due_at' => 'setDueAt',
        'files' => 'setFiles',
        'linked_to' => 'setLinkedTo',
        'linked_type' => 'setLinkedType',
        'pci_saq_a' => 'setPciSaqA',
        'state' => 'setState',
        'tags' => 'setTags',
        'type' => 'setType',
        'valid_from' => 'setValidFrom',
        'valid_until' => 'setValidUntil',
        'version' => 'setVersion'
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
        'compliance_form_template' => 'getComplianceFormTemplate',
        'due_at' => 'getDueAt',
        'files' => 'getFiles',
        'linked_to' => 'getLinkedTo',
        'linked_type' => 'getLinkedType',
        'pci_saq_a' => 'getPciSaqA',
        'state' => 'getState',
        'tags' => 'getTags',
        'type' => 'getType',
        'valid_from' => 'getValidFrom',
        'valid_until' => 'getValidUntil',
        'version' => 'getVersion'
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

    public const STATE_PENDING = 'PENDING';
    public const STATE_COMPLETED = 'COMPLETED';
    public const STATE_INVALID = 'INVALID';
    public const STATE_INCOMPLETE = 'INCOMPLETE';
    public const TYPE_PCI_SAQ_A = 'PCI_SAQ_A';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_COMPLETED,
            self::STATE_INVALID,
            self::STATE_INCOMPLETE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PCI_SAQ_A,
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
        $this->container['compliance_form_template'] = $data['compliance_form_template'] ?? null;
        $this->container['due_at'] = $data['due_at'] ?? null;
        $this->container['files'] = $data['files'] ?? null;
        $this->container['linked_to'] = $data['linked_to'] ?? null;
        $this->container['linked_type'] = $data['linked_type'] ?? null;
        $this->container['pci_saq_a'] = $data['pci_saq_a'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['valid_from'] = $data['valid_from'] ?? null;
        $this->container['valid_until'] = $data['valid_until'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * @param string|null $id ID of the `compliance_form`.
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
     * Gets compliance_form_template
     *
     * @return string|null
     */
    public function getComplianceFormTemplate()
    {
        return $this->container['compliance_form_template'];
    }

    /**
     * Sets compliance_form_template
     *
     * @param string|null $compliance_form_template Template linked to this `compliance_form`.
     *
     * @return self
     */
    public function setComplianceFormTemplate($compliance_form_template, $deserialize = false)
    {
        $this->container['compliance_form_template'] = $compliance_form_template;

        return $this;
    }

    /**
     * Gets due_at
     *
     * @return \DateTime|null
     */
    public function getDueAt()
    {
        return $this->container['due_at'];
    }

    /**
     * Sets due_at
     *
     * @param \DateTime|null $due_at Timestamp of when the `compliance_form` must be completed by.
     *
     * @return self
     */
    public function setDueAt($due_at, $deserialize = false)
    {
        $this->container['due_at'] = $due_at;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Finix\Model\ComplianceFormFiles|null
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Finix\Model\ComplianceFormFiles|null $files files
     *
     * @return self
     */
    public function setFiles($files, $deserialize = false)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets linked_to
     *
     * @return string|null
     */
    public function getLinkedTo()
    {
        return $this->container['linked_to'];
    }

    /**
     * Sets linked_to
     *
     * @param string|null $linked_to The ID of the `merchant` linked to the `compliance_form`.
     *
     * @return self
     */
    public function setLinkedTo($linked_to, $deserialize = false)
    {
        $this->container['linked_to'] = $linked_to;

        return $this;
    }

    /**
     * Gets linked_type
     *
     * @return string|null
     */
    public function getLinkedType()
    {
        return $this->container['linked_type'];
    }

    /**
     * Sets linked_type
     *
     * @param string|null $linked_type The type of resource this `compliance_form` is linked to.
     *
     * @return self
     */
    public function setLinkedType($linked_type, $deserialize = false)
    {
        $this->container['linked_type'] = $linked_type;

        return $this;
    }

    /**
     * Gets pci_saq_a
     *
     * @return \Finix\Model\ComplianceFormPciSaqA|null
     */
    public function getPciSaqA()
    {
        return $this->container['pci_saq_a'];
    }

    /**
     * Sets pci_saq_a
     *
     * @param \Finix\Model\ComplianceFormPciSaqA|null $pci_saq_a pci_saq_a
     *
     * @return self
     */
    public function setPciSaqA($pci_saq_a, $deserialize = false)
    {
        $this->container['pci_saq_a'] = $pci_saq_a;

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
     * @param string|null $state The state of the `compliance_form`.
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
     * @param string|null $type Type of `compliance_form`. There is one available value: **PCI_SAQ_A**.
     *
     * @return self
     */
    public function setType($type, $deserialize = false)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets valid_from
     *
     * @return \DateTime|null
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param \DateTime|null $valid_from Timestamp of when the `compliance_form` becomes active and valid.
     *
     * @return self
     */
    public function setValidFrom($valid_from, $deserialize = false)
    {
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_until
     *
     * @return string|null
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     *
     * @param string|null $valid_until Timestamp of when the `compliance_form` is no longer active and valid.
     *
     * @return self
     */
    public function setValidUntil($valid_until, $deserialize = false)
    {
        $this->container['valid_until'] = $valid_until;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version Details the version of the SAQ form. When `compliance_forms` are created, Finix automatically provides the most up-to-date SAQ form that's available.
     *
     * @return self
     */
    public function setVersion($version, $deserialize = false)
    {
        $this->container['version'] = $version;

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



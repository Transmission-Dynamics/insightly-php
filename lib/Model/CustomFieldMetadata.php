<?php
/**
 * CustomFieldMetadata
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Insightly API v3.0
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CustomFieldMetadata Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomFieldMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomFieldMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'field_name' => 'string',
        'field_order' => 'int',
        'field_for' => 'string',
        'field_label' => 'string',
        'field_type' => 'string',
        'field_help_text' => 'string',
        'default_value' => 'string',
        'editable' => 'bool',
        'visible' => 'bool',
        'custom_field_options' => '\Swagger\Client\Model\APICustomFieldOption[]',
        'dependency' => '\Swagger\Client\Model\APICustomFieldDependency',
        'join_object' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'field_name' => null,
        'field_order' => 'int64',
        'field_for' => null,
        'field_label' => null,
        'field_type' => null,
        'field_help_text' => null,
        'default_value' => null,
        'editable' => null,
        'visible' => null,
        'custom_field_options' => null,
        'dependency' => null,
        'join_object' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'field_name' => 'FIELD_NAME',
        'field_order' => 'FIELD_ORDER',
        'field_for' => 'FIELD_FOR',
        'field_label' => 'FIELD_LABEL',
        'field_type' => 'FIELD_TYPE',
        'field_help_text' => 'FIELD_HELP_TEXT',
        'default_value' => 'DEFAULT_VALUE',
        'editable' => 'EDITABLE',
        'visible' => 'VISIBLE',
        'custom_field_options' => 'CUSTOM_FIELD_OPTIONS',
        'dependency' => 'DEPENDENCY',
        'join_object' => 'JOIN_OBJECT'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field_name' => 'setFieldName',
        'field_order' => 'setFieldOrder',
        'field_for' => 'setFieldFor',
        'field_label' => 'setFieldLabel',
        'field_type' => 'setFieldType',
        'field_help_text' => 'setFieldHelpText',
        'default_value' => 'setDefaultValue',
        'editable' => 'setEditable',
        'visible' => 'setVisible',
        'custom_field_options' => 'setCustomFieldOptions',
        'dependency' => 'setDependency',
        'join_object' => 'setJoinObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field_name' => 'getFieldName',
        'field_order' => 'getFieldOrder',
        'field_for' => 'getFieldFor',
        'field_label' => 'getFieldLabel',
        'field_type' => 'getFieldType',
        'field_help_text' => 'getFieldHelpText',
        'default_value' => 'getDefaultValue',
        'editable' => 'getEditable',
        'visible' => 'getVisible',
        'custom_field_options' => 'getCustomFieldOptions',
        'dependency' => 'getDependency',
        'join_object' => 'getJoinObject'
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
        return self::$swaggerModelName;
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
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['field_order'] = isset($data['field_order']) ? $data['field_order'] : null;
        $this->container['field_for'] = isset($data['field_for']) ? $data['field_for'] : null;
        $this->container['field_label'] = isset($data['field_label']) ? $data['field_label'] : null;
        $this->container['field_type'] = isset($data['field_type']) ? $data['field_type'] : null;
        $this->container['field_help_text'] = isset($data['field_help_text']) ? $data['field_help_text'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['custom_field_options'] = isset($data['custom_field_options']) ? $data['custom_field_options'] : null;
        $this->container['dependency'] = isset($data['dependency']) ? $data['dependency'] : null;
        $this->container['join_object'] = isset($data['join_object']) ? $data['join_object'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['field_name'] === null) {
            $invalidProperties[] = "'field_name' can't be null";
        }
        if ($this->container['field_order'] === null) {
            $invalidProperties[] = "'field_order' can't be null";
        }
        if ($this->container['field_for'] === null) {
            $invalidProperties[] = "'field_for' can't be null";
        }
        if ((strlen($this->container['field_for']) > 12)) {
            $invalidProperties[] = "invalid value for 'field_for', the character length must be smaller than or equal to 12.";
        }

        if ((strlen($this->container['field_for']) < 0)) {
            $invalidProperties[] = "invalid value for 'field_for', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['field_label'] === null) {
            $invalidProperties[] = "'field_label' can't be null";
        }
        if ((strlen($this->container['field_label']) > 255)) {
            $invalidProperties[] = "invalid value for 'field_label', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['field_label']) < 0)) {
            $invalidProperties[] = "invalid value for 'field_label', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['field_type'] === null) {
            $invalidProperties[] = "'field_type' can't be null";
        }
        if ((strlen($this->container['field_type']) > 20)) {
            $invalidProperties[] = "invalid value for 'field_type', the character length must be smaller than or equal to 20.";
        }

        if ((strlen($this->container['field_type']) < 0)) {
            $invalidProperties[] = "invalid value for 'field_type', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['field_help_text']) && (strlen($this->container['field_help_text']) > 1000)) {
            $invalidProperties[] = "invalid value for 'field_help_text', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['field_help_text']) && (strlen($this->container['field_help_text']) < 0)) {
            $invalidProperties[] = "invalid value for 'field_help_text', the character length must be bigger than or equal to 0.";
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

        if ($this->container['field_name'] === null) {
            return false;
        }
        if ($this->container['field_order'] === null) {
            return false;
        }
        if ($this->container['field_for'] === null) {
            return false;
        }
        if (strlen($this->container['field_for']) > 12) {
            return false;
        }
        if (strlen($this->container['field_for']) < 0) {
            return false;
        }
        if ($this->container['field_label'] === null) {
            return false;
        }
        if (strlen($this->container['field_label']) > 255) {
            return false;
        }
        if (strlen($this->container['field_label']) < 0) {
            return false;
        }
        if ($this->container['field_type'] === null) {
            return false;
        }
        if (strlen($this->container['field_type']) > 20) {
            return false;
        }
        if (strlen($this->container['field_type']) < 0) {
            return false;
        }
        if (strlen($this->container['field_help_text']) > 1000) {
            return false;
        }
        if (strlen($this->container['field_help_text']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name field_name
     *
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets field_order
     *
     * @return int
     */
    public function getFieldOrder()
    {
        return $this->container['field_order'];
    }

    /**
     * Sets field_order
     *
     * @param int $field_order field_order
     *
     * @return $this
     */
    public function setFieldOrder($field_order)
    {
        $this->container['field_order'] = $field_order;

        return $this;
    }

    /**
     * Gets field_for
     *
     * @return string
     */
    public function getFieldFor()
    {
        return $this->container['field_for'];
    }

    /**
     * Sets field_for
     *
     * @param string $field_for field_for
     *
     * @return $this
     */
    public function setFieldFor($field_for)
    {
        if ((strlen($field_for) > 12)) {
            throw new \InvalidArgumentException('invalid length for $field_for when calling CustomFieldMetadata., must be smaller than or equal to 12.');
        }
        if ((strlen($field_for) < 0)) {
            throw new \InvalidArgumentException('invalid length for $field_for when calling CustomFieldMetadata., must be bigger than or equal to 0.');
        }

        $this->container['field_for'] = $field_for;

        return $this;
    }

    /**
     * Gets field_label
     *
     * @return string
     */
    public function getFieldLabel()
    {
        return $this->container['field_label'];
    }

    /**
     * Sets field_label
     *
     * @param string $field_label field_label
     *
     * @return $this
     */
    public function setFieldLabel($field_label)
    {
        if ((strlen($field_label) > 255)) {
            throw new \InvalidArgumentException('invalid length for $field_label when calling CustomFieldMetadata., must be smaller than or equal to 255.');
        }
        if ((strlen($field_label) < 0)) {
            throw new \InvalidArgumentException('invalid length for $field_label when calling CustomFieldMetadata., must be bigger than or equal to 0.');
        }

        $this->container['field_label'] = $field_label;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param string $field_type field_type
     *
     * @return $this
     */
    public function setFieldType($field_type)
    {
        if ((strlen($field_type) > 20)) {
            throw new \InvalidArgumentException('invalid length for $field_type when calling CustomFieldMetadata., must be smaller than or equal to 20.');
        }
        if ((strlen($field_type) < 0)) {
            throw new \InvalidArgumentException('invalid length for $field_type when calling CustomFieldMetadata., must be bigger than or equal to 0.');
        }

        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets field_help_text
     *
     * @return string
     */
    public function getFieldHelpText()
    {
        return $this->container['field_help_text'];
    }

    /**
     * Sets field_help_text
     *
     * @param string $field_help_text field_help_text
     *
     * @return $this
     */
    public function setFieldHelpText($field_help_text)
    {
        if (!is_null($field_help_text) && (strlen($field_help_text) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $field_help_text when calling CustomFieldMetadata., must be smaller than or equal to 1000.');
        }
        if (!is_null($field_help_text) && (strlen($field_help_text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $field_help_text when calling CustomFieldMetadata., must be bigger than or equal to 0.');
        }

        $this->container['field_help_text'] = $field_help_text;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string $default_value default_value
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets editable
     *
     * @return bool
     */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
     * Sets editable
     *
     * @param bool $editable editable
     *
     * @return $this
     */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool $visible visible
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets custom_field_options
     *
     * @return \Swagger\Client\Model\APICustomFieldOption[]
     */
    public function getCustomFieldOptions()
    {
        return $this->container['custom_field_options'];
    }

    /**
     * Sets custom_field_options
     *
     * @param \Swagger\Client\Model\APICustomFieldOption[] $custom_field_options custom_field_options
     *
     * @return $this
     */
    public function setCustomFieldOptions($custom_field_options)
    {
        $this->container['custom_field_options'] = $custom_field_options;

        return $this;
    }

    /**
     * Gets dependency
     *
     * @return \Swagger\Client\Model\APICustomFieldDependency
     */
    public function getDependency()
    {
        return $this->container['dependency'];
    }

    /**
     * Sets dependency
     *
     * @param \Swagger\Client\Model\APICustomFieldDependency $dependency dependency
     *
     * @return $this
     */
    public function setDependency($dependency)
    {
        $this->container['dependency'] = $dependency;

        return $this;
    }

    /**
     * Gets join_object
     *
     * @return string
     */
    public function getJoinObject()
    {
        return $this->container['join_object'];
    }

    /**
     * Sets join_object
     *
     * @param string $join_object join_object
     *
     * @return $this
     */
    public function setJoinObject($join_object)
    {
        $this->container['join_object'] = $join_object;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



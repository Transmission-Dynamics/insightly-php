<?php
/**
 * APICustomFieldMetadata
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Insightly API v2.2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * APICustomFieldMetadata Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class APICustomFieldMetadata implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'APICustomFieldMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom_field_id' => 'string',
        'order_id' => 'int',
        'field_for' => 'string',
        'field_name' => 'string',
        'field_type' => 'string',
        'field_help_text' => 'string',
        'default_value' => 'object',
        'group_id' => 'int',
        'editable' => 'bool',
        'visible' => 'bool',
        'custom_field_options' => '\Swagger\Client\Model\APICustomFieldOption[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'custom_field_id' => 'CUSTOM_FIELD_ID',
        'order_id' => 'ORDER_ID',
        'field_for' => 'FIELD_FOR',
        'field_name' => 'FIELD_NAME',
        'field_type' => 'FIELD_TYPE',
        'field_help_text' => 'FIELD_HELP_TEXT',
        'default_value' => 'DEFAULT_VALUE',
        'group_id' => 'GROUP_ID',
        'editable' => 'EDITABLE',
        'visible' => 'VISIBLE',
        'custom_field_options' => 'CUSTOM_FIELD_OPTIONS'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'custom_field_id' => 'setCustomFieldId',
        'order_id' => 'setOrderId',
        'field_for' => 'setFieldFor',
        'field_name' => 'setFieldName',
        'field_type' => 'setFieldType',
        'field_help_text' => 'setFieldHelpText',
        'default_value' => 'setDefaultValue',
        'group_id' => 'setGroupId',
        'editable' => 'setEditable',
        'visible' => 'setVisible',
        'custom_field_options' => 'setCustomFieldOptions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'custom_field_id' => 'getCustomFieldId',
        'order_id' => 'getOrderId',
        'field_for' => 'getFieldFor',
        'field_name' => 'getFieldName',
        'field_type' => 'getFieldType',
        'field_help_text' => 'getFieldHelpText',
        'default_value' => 'getDefaultValue',
        'group_id' => 'getGroupId',
        'editable' => 'getEditable',
        'visible' => 'getVisible',
        'custom_field_options' => 'getCustomFieldOptions'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['custom_field_id'] = isset($data['custom_field_id']) ? $data['custom_field_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['field_for'] = isset($data['field_for']) ? $data['field_for'] : null;
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['field_type'] = isset($data['field_type']) ? $data['field_type'] : null;
        $this->container['field_help_text'] = isset($data['field_help_text']) ? $data['field_help_text'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['custom_field_options'] = isset($data['custom_field_options']) ? $data['custom_field_options'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['custom_field_id'] === null) {
            $invalid_properties[] = "'custom_field_id' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalid_properties[] = "'order_id' can't be null";
        }
        if ($this->container['field_for'] === null) {
            $invalid_properties[] = "'field_for' can't be null";
        }
        if ((strlen($this->container['field_for']) > 12)) {
            $invalid_properties[] = "invalid value for 'field_for', the character length must be smaller than or equal to 12.";
        }

        if ((strlen($this->container['field_for']) < 0)) {
            $invalid_properties[] = "invalid value for 'field_for', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['field_name'] === null) {
            $invalid_properties[] = "'field_name' can't be null";
        }
        if ((strlen($this->container['field_name']) > 255)) {
            $invalid_properties[] = "invalid value for 'field_name', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['field_name']) < 0)) {
            $invalid_properties[] = "invalid value for 'field_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['field_type'] === null) {
            $invalid_properties[] = "'field_type' can't be null";
        }
        if ((strlen($this->container['field_type']) > 20)) {
            $invalid_properties[] = "invalid value for 'field_type', the character length must be smaller than or equal to 20.";
        }

        if ((strlen($this->container['field_type']) < 0)) {
            $invalid_properties[] = "invalid value for 'field_type', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['field_help_text']) && (strlen($this->container['field_help_text']) > 1000)) {
            $invalid_properties[] = "invalid value for 'field_help_text', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['field_help_text']) && (strlen($this->container['field_help_text']) < 0)) {
            $invalid_properties[] = "invalid value for 'field_help_text', the character length must be bigger than or equal to 0.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['custom_field_id'] === null) {
            return false;
        }
        if ($this->container['order_id'] === null) {
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
        if ($this->container['field_name'] === null) {
            return false;
        }
        if (strlen($this->container['field_name']) > 255) {
            return false;
        }
        if (strlen($this->container['field_name']) < 0) {
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
     * Gets custom_field_id
     * @return string
     */
    public function getCustomFieldId()
    {
        return $this->container['custom_field_id'];
    }

    /**
     * Sets custom_field_id
     * @param string $custom_field_id
     * @return $this
     */
    public function setCustomFieldId($custom_field_id)
    {
        $this->container['custom_field_id'] = $custom_field_id;

        return $this;
    }

    /**
     * Gets order_id
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     * @param int $order_id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets field_for
     * @return string
     */
    public function getFieldFor()
    {
        return $this->container['field_for'];
    }

    /**
     * Sets field_for
     * @param string $field_for
     * @return $this
     */
    public function setFieldFor($field_for)
    {
        if ((strlen($field_for) > 12)) {
            throw new \InvalidArgumentException('invalid length for $field_for when calling APICustomFieldMetadata., must be smaller than or equal to 12.');
        }
        if ((strlen($field_for) < 0)) {
            throw new \InvalidArgumentException('invalid length for $field_for when calling APICustomFieldMetadata., must be bigger than or equal to 0.');
        }

        $this->container['field_for'] = $field_for;

        return $this;
    }

    /**
     * Gets field_name
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     * @param string $field_name
     * @return $this
     */
    public function setFieldName($field_name)
    {
        if ((strlen($field_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $field_name when calling APICustomFieldMetadata., must be smaller than or equal to 255.');
        }
        if ((strlen($field_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $field_name when calling APICustomFieldMetadata., must be bigger than or equal to 0.');
        }

        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets field_type
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     * @param string $field_type
     * @return $this
     */
    public function setFieldType($field_type)
    {
        if ((strlen($field_type) > 20)) {
            throw new \InvalidArgumentException('invalid length for $field_type when calling APICustomFieldMetadata., must be smaller than or equal to 20.');
        }
        if ((strlen($field_type) < 0)) {
            throw new \InvalidArgumentException('invalid length for $field_type when calling APICustomFieldMetadata., must be bigger than or equal to 0.');
        }

        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets field_help_text
     * @return string
     */
    public function getFieldHelpText()
    {
        return $this->container['field_help_text'];
    }

    /**
     * Sets field_help_text
     * @param string $field_help_text
     * @return $this
     */
    public function setFieldHelpText($field_help_text)
    {
        if (!is_null($field_help_text) && (strlen($field_help_text) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $field_help_text when calling APICustomFieldMetadata., must be smaller than or equal to 1000.');
        }
        if (!is_null($field_help_text) && (strlen($field_help_text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $field_help_text when calling APICustomFieldMetadata., must be bigger than or equal to 0.');
        }

        $this->container['field_help_text'] = $field_help_text;

        return $this;
    }

    /**
     * Gets default_value
     * @return object
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     * @param object $default_value
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets group_id
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     * @param int $group_id
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets editable
     * @return bool
     */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
     * Sets editable
     * @param bool $editable
     * @return $this
     */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;

        return $this;
    }

    /**
     * Gets visible
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     * @param bool $visible
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets custom_field_options
     * @return \Swagger\Client\Model\APICustomFieldOption[]
     */
    public function getCustomFieldOptions()
    {
        return $this->container['custom_field_options'];
    }

    /**
     * Sets custom_field_options
     * @param \Swagger\Client\Model\APICustomFieldOption[] $custom_field_options
     * @return $this
     */
    public function setCustomFieldOptions($custom_field_options)
    {
        $this->container['custom_field_options'] = $custom_field_options;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

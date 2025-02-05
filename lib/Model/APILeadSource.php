<?php
/**
 * APILeadSource
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Insightly API v3.1
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v3.1
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
 * APILeadSource Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APILeadSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APILeadSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lead_source_id' => 'int',
        'lead_source' => 'string',
        'default_value' => 'bool',
        'field_order' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lead_source_id' => 'int64',
        'lead_source' => null,
        'default_value' => null,
        'field_order' => 'int32'
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
        'lead_source_id' => 'LEAD_SOURCE_ID',
        'lead_source' => 'LEAD_SOURCE',
        'default_value' => 'DEFAULT_VALUE',
        'field_order' => 'FIELD_ORDER'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lead_source_id' => 'setLeadSourceId',
        'lead_source' => 'setLeadSource',
        'default_value' => 'setDefaultValue',
        'field_order' => 'setFieldOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lead_source_id' => 'getLeadSourceId',
        'lead_source' => 'getLeadSource',
        'default_value' => 'getDefaultValue',
        'field_order' => 'getFieldOrder'
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
        $this->container['lead_source_id'] = isset($data['lead_source_id']) ? $data['lead_source_id'] : null;
        $this->container['lead_source'] = isset($data['lead_source']) ? $data['lead_source'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['field_order'] = isset($data['field_order']) ? $data['field_order'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lead_source'] === null) {
            $invalidProperties[] = "'lead_source' can't be null";
        }
        if ((strlen($this->container['lead_source']) > 255)) {
            $invalidProperties[] = "invalid value for 'lead_source', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['lead_source']) < 0)) {
            $invalidProperties[] = "invalid value for 'lead_source', the character length must be bigger than or equal to 0.";
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

        if ($this->container['lead_source'] === null) {
            return false;
        }
        if (strlen($this->container['lead_source']) > 255) {
            return false;
        }
        if (strlen($this->container['lead_source']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets lead_source_id
     *
     * @return int
     */
    public function getLeadSourceId()
    {
        return $this->container['lead_source_id'];
    }

    /**
     * Sets lead_source_id
     *
     * @param int $lead_source_id lead_source_id
     *
     * @return $this
     */
    public function setLeadSourceId($lead_source_id)
    {
        $this->container['lead_source_id'] = $lead_source_id;

        return $this;
    }

    /**
     * Gets lead_source
     *
     * @return string
     */
    public function getLeadSource()
    {
        return $this->container['lead_source'];
    }

    /**
     * Sets lead_source
     *
     * @param string $lead_source lead_source
     *
     * @return $this
     */
    public function setLeadSource($lead_source)
    {
        if ((strlen($lead_source) > 255)) {
            throw new \InvalidArgumentException('invalid length for $lead_source when calling APILeadSource., must be smaller than or equal to 255.');
        }
        if ((strlen($lead_source) < 0)) {
            throw new \InvalidArgumentException('invalid length for $lead_source when calling APILeadSource., must be bigger than or equal to 0.');
        }

        $this->container['lead_source'] = $lead_source;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return bool
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param bool $default_value default_value
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

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

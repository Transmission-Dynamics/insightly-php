<?php
/**
 * APICustomFieldOption
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
 * APICustomFieldOption Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APICustomFieldOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APICustomFieldOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'option_id' => 'int',
        'option_value' => 'string',
        'option_default' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'option_id' => 'int32',
        'option_value' => null,
        'option_default' => null
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
        'option_id' => 'OPTION_ID',
        'option_value' => 'OPTION_VALUE',
        'option_default' => 'OPTION_DEFAULT'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'option_id' => 'setOptionId',
        'option_value' => 'setOptionValue',
        'option_default' => 'setOptionDefault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'option_id' => 'getOptionId',
        'option_value' => 'getOptionValue',
        'option_default' => 'getOptionDefault'
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
        $this->container['option_id'] = isset($data['option_id']) ? $data['option_id'] : null;
        $this->container['option_value'] = isset($data['option_value']) ? $data['option_value'] : null;
        $this->container['option_default'] = isset($data['option_default']) ? $data['option_default'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['option_value'] === null) {
            $invalidProperties[] = "'option_value' can't be null";
        }
        if ((strlen($this->container['option_value']) > 100)) {
            $invalidProperties[] = "invalid value for 'option_value', the character length must be smaller than or equal to 100.";
        }

        if ((strlen($this->container['option_value']) < 0)) {
            $invalidProperties[] = "invalid value for 'option_value', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['option_default'] === null) {
            $invalidProperties[] = "'option_default' can't be null";
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

        if ($this->container['option_value'] === null) {
            return false;
        }
        if (strlen($this->container['option_value']) > 100) {
            return false;
        }
        if (strlen($this->container['option_value']) < 0) {
            return false;
        }
        if ($this->container['option_default'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets option_id
     *
     * @return int
     */
    public function getOptionId()
    {
        return $this->container['option_id'];
    }

    /**
     * Sets option_id
     *
     * @param int $option_id option_id
     *
     * @return $this
     */
    public function setOptionId($option_id)
    {
        $this->container['option_id'] = $option_id;

        return $this;
    }

    /**
     * Gets option_value
     *
     * @return string
     */
    public function getOptionValue()
    {
        return $this->container['option_value'];
    }

    /**
     * Sets option_value
     *
     * @param string $option_value option_value
     *
     * @return $this
     */
    public function setOptionValue($option_value)
    {
        if ((strlen($option_value) > 100)) {
            throw new \InvalidArgumentException('invalid length for $option_value when calling APICustomFieldOption., must be smaller than or equal to 100.');
        }
        if ((strlen($option_value) < 0)) {
            throw new \InvalidArgumentException('invalid length for $option_value when calling APICustomFieldOption., must be bigger than or equal to 0.');
        }

        $this->container['option_value'] = $option_value;

        return $this;
    }

    /**
     * Gets option_default
     *
     * @return bool
     */
    public function getOptionDefault()
    {
        return $this->container['option_default'];
    }

    /**
     * Sets option_default
     *
     * @param bool $option_default option_default
     *
     * @return $this
     */
    public function setOptionDefault($option_default)
    {
        $this->container['option_default'] = $option_default;

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

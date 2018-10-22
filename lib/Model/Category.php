<?php
/**
 * Category
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
 * Category Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Category implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Category';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category_id' => 'int',
        'category_name' => 'string',
        'active' => 'bool',
        'background_color' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category_id' => 'int64',
        'category_name' => null,
        'active' => null,
        'background_color' => null
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
        'category_id' => 'CATEGORY_ID',
        'category_name' => 'CATEGORY_NAME',
        'active' => 'ACTIVE',
        'background_color' => 'BACKGROUND_COLOR'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_id' => 'setCategoryId',
        'category_name' => 'setCategoryName',
        'active' => 'setActive',
        'background_color' => 'setBackgroundColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_id' => 'getCategoryId',
        'category_name' => 'getCategoryName',
        'active' => 'getActive',
        'background_color' => 'getBackgroundColor'
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
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['category_name'] = isset($data['category_name']) ? $data['category_name'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['category_name'] === null) {
            $invalidProperties[] = "'category_name' can't be null";
        }
        if ((strlen($this->container['category_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'category_name', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['category_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'category_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['background_color'] === null) {
            $invalidProperties[] = "'background_color' can't be null";
        }
        if ((strlen($this->container['background_color']) > 6)) {
            $invalidProperties[] = "invalid value for 'background_color', the character length must be smaller than or equal to 6.";
        }

        if ((strlen($this->container['background_color']) < 0)) {
            $invalidProperties[] = "invalid value for 'background_color', the character length must be bigger than or equal to 0.";
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

        if ($this->container['category_name'] === null) {
            return false;
        }
        if (strlen($this->container['category_name']) > 255) {
            return false;
        }
        if (strlen($this->container['category_name']) < 0) {
            return false;
        }
        if ($this->container['background_color'] === null) {
            return false;
        }
        if (strlen($this->container['background_color']) > 6) {
            return false;
        }
        if (strlen($this->container['background_color']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets category_id
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int $category_id category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets category_name
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     *
     * @param string $category_name category_name
     *
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        if ((strlen($category_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $category_name when calling Category., must be smaller than or equal to 255.');
        }
        if ((strlen($category_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $category_name when calling Category., must be bigger than or equal to 0.');
        }

        $this->container['category_name'] = $category_name;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string $background_color background_color
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        if ((strlen($background_color) > 6)) {
            throw new \InvalidArgumentException('invalid length for $background_color when calling Category., must be smaller than or equal to 6.');
        }
        if ((strlen($background_color) < 0)) {
            throw new \InvalidArgumentException('invalid length for $background_color when calling Category., must be bigger than or equal to 0.');
        }

        $this->container['background_color'] = $background_color;

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



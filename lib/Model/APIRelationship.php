<?php
/**
 * APIRelationship
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
 * APIRelationship Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APIRelationship implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APIRelationship';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'relationship_id' => 'int',
        'forward_title' => 'string',
        'forward' => 'string',
        'reverse_title' => 'string',
        'reverse' => 'string',
        'for_contacts' => 'bool',
        'for_organisations' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'relationship_id' => 'int64',
        'forward_title' => null,
        'forward' => null,
        'reverse_title' => null,
        'reverse' => null,
        'for_contacts' => null,
        'for_organisations' => null
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
        'relationship_id' => 'RELATIONSHIP_ID',
        'forward_title' => 'FORWARD_TITLE',
        'forward' => 'FORWARD',
        'reverse_title' => 'REVERSE_TITLE',
        'reverse' => 'REVERSE',
        'for_contacts' => 'FOR_CONTACTS',
        'for_organisations' => 'FOR_ORGANISATIONS'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'relationship_id' => 'setRelationshipId',
        'forward_title' => 'setForwardTitle',
        'forward' => 'setForward',
        'reverse_title' => 'setReverseTitle',
        'reverse' => 'setReverse',
        'for_contacts' => 'setForContacts',
        'for_organisations' => 'setForOrganisations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'relationship_id' => 'getRelationshipId',
        'forward_title' => 'getForwardTitle',
        'forward' => 'getForward',
        'reverse_title' => 'getReverseTitle',
        'reverse' => 'getReverse',
        'for_contacts' => 'getForContacts',
        'for_organisations' => 'getForOrganisations'
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
        $this->container['relationship_id'] = isset($data['relationship_id']) ? $data['relationship_id'] : null;
        $this->container['forward_title'] = isset($data['forward_title']) ? $data['forward_title'] : null;
        $this->container['forward'] = isset($data['forward']) ? $data['forward'] : null;
        $this->container['reverse_title'] = isset($data['reverse_title']) ? $data['reverse_title'] : null;
        $this->container['reverse'] = isset($data['reverse']) ? $data['reverse'] : null;
        $this->container['for_contacts'] = isset($data['for_contacts']) ? $data['for_contacts'] : null;
        $this->container['for_organisations'] = isset($data['for_organisations']) ? $data['for_organisations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['forward_title']) && (strlen($this->container['forward_title']) > 255)) {
            $invalidProperties[] = "invalid value for 'forward_title', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['forward_title']) && (strlen($this->container['forward_title']) < 0)) {
            $invalidProperties[] = "invalid value for 'forward_title', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['forward']) && (strlen($this->container['forward']) > 255)) {
            $invalidProperties[] = "invalid value for 'forward', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['forward']) && (strlen($this->container['forward']) < 0)) {
            $invalidProperties[] = "invalid value for 'forward', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['reverse_title']) && (strlen($this->container['reverse_title']) > 255)) {
            $invalidProperties[] = "invalid value for 'reverse_title', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reverse_title']) && (strlen($this->container['reverse_title']) < 0)) {
            $invalidProperties[] = "invalid value for 'reverse_title', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['reverse']) && (strlen($this->container['reverse']) > 255)) {
            $invalidProperties[] = "invalid value for 'reverse', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reverse']) && (strlen($this->container['reverse']) < 0)) {
            $invalidProperties[] = "invalid value for 'reverse', the character length must be bigger than or equal to 0.";
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

        if (strlen($this->container['forward_title']) > 255) {
            return false;
        }
        if (strlen($this->container['forward_title']) < 0) {
            return false;
        }
        if (strlen($this->container['forward']) > 255) {
            return false;
        }
        if (strlen($this->container['forward']) < 0) {
            return false;
        }
        if (strlen($this->container['reverse_title']) > 255) {
            return false;
        }
        if (strlen($this->container['reverse_title']) < 0) {
            return false;
        }
        if (strlen($this->container['reverse']) > 255) {
            return false;
        }
        if (strlen($this->container['reverse']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets relationship_id
     *
     * @return int
     */
    public function getRelationshipId()
    {
        return $this->container['relationship_id'];
    }

    /**
     * Sets relationship_id
     *
     * @param int $relationship_id relationship_id
     *
     * @return $this
     */
    public function setRelationshipId($relationship_id)
    {
        $this->container['relationship_id'] = $relationship_id;

        return $this;
    }

    /**
     * Gets forward_title
     *
     * @return string
     */
    public function getForwardTitle()
    {
        return $this->container['forward_title'];
    }

    /**
     * Sets forward_title
     *
     * @param string $forward_title forward_title
     *
     * @return $this
     */
    public function setForwardTitle($forward_title)
    {
        if (!is_null($forward_title) && (strlen($forward_title) > 255)) {
            throw new \InvalidArgumentException('invalid length for $forward_title when calling APIRelationship., must be smaller than or equal to 255.');
        }
        if (!is_null($forward_title) && (strlen($forward_title) < 0)) {
            throw new \InvalidArgumentException('invalid length for $forward_title when calling APIRelationship., must be bigger than or equal to 0.');
        }

        $this->container['forward_title'] = $forward_title;

        return $this;
    }

    /**
     * Gets forward
     *
     * @return string
     */
    public function getForward()
    {
        return $this->container['forward'];
    }

    /**
     * Sets forward
     *
     * @param string $forward forward
     *
     * @return $this
     */
    public function setForward($forward)
    {
        if (!is_null($forward) && (strlen($forward) > 255)) {
            throw new \InvalidArgumentException('invalid length for $forward when calling APIRelationship., must be smaller than or equal to 255.');
        }
        if (!is_null($forward) && (strlen($forward) < 0)) {
            throw new \InvalidArgumentException('invalid length for $forward when calling APIRelationship., must be bigger than or equal to 0.');
        }

        $this->container['forward'] = $forward;

        return $this;
    }

    /**
     * Gets reverse_title
     *
     * @return string
     */
    public function getReverseTitle()
    {
        return $this->container['reverse_title'];
    }

    /**
     * Sets reverse_title
     *
     * @param string $reverse_title reverse_title
     *
     * @return $this
     */
    public function setReverseTitle($reverse_title)
    {
        if (!is_null($reverse_title) && (strlen($reverse_title) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reverse_title when calling APIRelationship., must be smaller than or equal to 255.');
        }
        if (!is_null($reverse_title) && (strlen($reverse_title) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reverse_title when calling APIRelationship., must be bigger than or equal to 0.');
        }

        $this->container['reverse_title'] = $reverse_title;

        return $this;
    }

    /**
     * Gets reverse
     *
     * @return string
     */
    public function getReverse()
    {
        return $this->container['reverse'];
    }

    /**
     * Sets reverse
     *
     * @param string $reverse reverse
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        if (!is_null($reverse) && (strlen($reverse) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reverse when calling APIRelationship., must be smaller than or equal to 255.');
        }
        if (!is_null($reverse) && (strlen($reverse) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reverse when calling APIRelationship., must be bigger than or equal to 0.');
        }

        $this->container['reverse'] = $reverse;

        return $this;
    }

    /**
     * Gets for_contacts
     *
     * @return bool
     */
    public function getForContacts()
    {
        return $this->container['for_contacts'];
    }

    /**
     * Sets for_contacts
     *
     * @param bool $for_contacts for_contacts
     *
     * @return $this
     */
    public function setForContacts($for_contacts)
    {
        $this->container['for_contacts'] = $for_contacts;

        return $this;
    }

    /**
     * Gets for_organisations
     *
     * @return bool
     */
    public function getForOrganisations()
    {
        return $this->container['for_organisations'];
    }

    /**
     * Sets for_organisations
     *
     * @param bool $for_organisations for_organisations
     *
     * @return $this
     */
    public function setForOrganisations($for_organisations)
    {
        $this->container['for_organisations'] = $for_organisations;

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

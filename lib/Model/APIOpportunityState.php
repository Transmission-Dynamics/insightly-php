<?php
/**
 * APIOpportunityState
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
 * APIOpportunityState Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APIOpportunityState implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APIOpportunityState';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'opportunity_id' => 'int',
        'date_changed_utc' => '\DateTime',
        'for_opportunity_state' => 'string',
        'state_reason_id' => 'int',
        'state_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'opportunity_id' => 'int64',
        'date_changed_utc' => 'date-time',
        'for_opportunity_state' => null,
        'state_reason_id' => 'int64',
        'state_reason' => null
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
        'opportunity_id' => 'OPPORTUNITY_ID',
        'date_changed_utc' => 'DATE_CHANGED_UTC',
        'for_opportunity_state' => 'FOR_OPPORTUNITY_STATE',
        'state_reason_id' => 'STATE_REASON_ID',
        'state_reason' => 'STATE_REASON'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opportunity_id' => 'setOpportunityId',
        'date_changed_utc' => 'setDateChangedUtc',
        'for_opportunity_state' => 'setForOpportunityState',
        'state_reason_id' => 'setStateReasonId',
        'state_reason' => 'setStateReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opportunity_id' => 'getOpportunityId',
        'date_changed_utc' => 'getDateChangedUtc',
        'for_opportunity_state' => 'getForOpportunityState',
        'state_reason_id' => 'getStateReasonId',
        'state_reason' => 'getStateReason'
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
        $this->container['opportunity_id'] = isset($data['opportunity_id']) ? $data['opportunity_id'] : null;
        $this->container['date_changed_utc'] = isset($data['date_changed_utc']) ? $data['date_changed_utc'] : null;
        $this->container['for_opportunity_state'] = isset($data['for_opportunity_state']) ? $data['for_opportunity_state'] : null;
        $this->container['state_reason_id'] = isset($data['state_reason_id']) ? $data['state_reason_id'] : null;
        $this->container['state_reason'] = isset($data['state_reason']) ? $data['state_reason'] : null;
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

        return true;
    }


    /**
     * Gets opportunity_id
     *
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->container['opportunity_id'];
    }

    /**
     * Sets opportunity_id
     *
     * @param int $opportunity_id opportunity_id
     *
     * @return $this
     */
    public function setOpportunityId($opportunity_id)
    {
        $this->container['opportunity_id'] = $opportunity_id;

        return $this;
    }

    /**
     * Gets date_changed_utc
     *
     * @return \DateTime
     */
    public function getDateChangedUtc()
    {
        return $this->container['date_changed_utc'];
    }

    /**
     * Sets date_changed_utc
     *
     * @param \DateTime $date_changed_utc date_changed_utc
     *
     * @return $this
     */
    public function setDateChangedUtc($date_changed_utc)
    {
        $this->container['date_changed_utc'] = $date_changed_utc;

        return $this;
    }

    /**
     * Gets for_opportunity_state
     *
     * @return string
     */
    public function getForOpportunityState()
    {
        return $this->container['for_opportunity_state'];
    }

    /**
     * Sets for_opportunity_state
     *
     * @param string $for_opportunity_state for_opportunity_state
     *
     * @return $this
     */
    public function setForOpportunityState($for_opportunity_state)
    {
        $this->container['for_opportunity_state'] = $for_opportunity_state;

        return $this;
    }

    /**
     * Gets state_reason_id
     *
     * @return int
     */
    public function getStateReasonId()
    {
        return $this->container['state_reason_id'];
    }

    /**
     * Sets state_reason_id
     *
     * @param int $state_reason_id state_reason_id
     *
     * @return $this
     */
    public function setStateReasonId($state_reason_id)
    {
        $this->container['state_reason_id'] = $state_reason_id;

        return $this;
    }

    /**
     * Gets state_reason
     *
     * @return string
     */
    public function getStateReason()
    {
        return $this->container['state_reason'];
    }

    /**
     * Sets state_reason
     *
     * @param string $state_reason state_reason
     *
     * @return $this
     */
    public function setStateReason($state_reason)
    {
        $this->container['state_reason'] = $state_reason;

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

<?php
/**
 * Opportunity2
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
 * Opportunity2 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Opportunity2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Opportunity_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'opportunity_id' => 'int',
        'opportunity_name' => 'string',
        'opportunity_details' => 'string',
        'opportunity_state' => 'string',
        'responsible_user_id' => 'int',
        'category_id' => 'int',
        'image_url' => 'string',
        'bid_currency' => 'string',
        'bid_amount' => 'int',
        'bid_type' => 'string',
        'bid_duration' => 'int',
        'actual_close_date' => '\DateTime',
        'probability' => 'int',
        'forecast_close_date' => '\DateTime',
        'owner_user_id' => 'int',
        'pipeline_id' => 'int',
        'stage_id' => 'int',
        'organisation_id' => 'int',
        'customfields' => '\Swagger\Client\Model\APICustomField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'opportunity_id' => 'int64',
        'opportunity_name' => 'string',
        'opportunity_details' => 'string',
        'opportunity_state' => 'string',
        'responsible_user_id' => 'int64',
        'category_id' => 'int64',
        'image_url' => 'string',
        'bid_currency' => 'string',
        'bid_amount' => 'int64',
        'bid_type' => 'string',
        'bid_duration' => 'int32',
        'actual_close_date' => 'date-time',
        'probability' => 'int32',
        'forecast_close_date' => 'date-time',
        'owner_user_id' => 'int32',
        'pipeline_id' => 'int64',
        'stage_id' => 'int64',
        'organisation_id' => 'int64',
        'customfields' => null
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
        'opportunity_name' => 'OPPORTUNITY_NAME',
        'opportunity_details' => 'OPPORTUNITY_DETAILS',
        'opportunity_state' => 'OPPORTUNITY_STATE',
        'responsible_user_id' => 'RESPONSIBLE_USER_ID',
        'category_id' => 'CATEGORY_ID',
        'image_url' => 'IMAGE_URL',
        'bid_currency' => 'BID_CURRENCY',
        'bid_amount' => 'BID_AMOUNT',
        'bid_type' => 'BID_TYPE',
        'bid_duration' => 'BID_DURATION',
        'actual_close_date' => 'ACTUAL_CLOSE_DATE',
        'probability' => 'PROBABILITY',
        'forecast_close_date' => 'FORECAST_CLOSE_DATE',
        'owner_user_id' => 'OWNER_USER_ID',
        'pipeline_id' => 'PIPELINE_ID',
        'stage_id' => 'STAGE_ID',
        'organisation_id' => 'ORGANISATION_ID',
        'customfields' => 'CUSTOMFIELDS'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opportunity_id' => 'setOpportunityId',
        'opportunity_name' => 'setOpportunityName',
        'opportunity_details' => 'setOpportunityDetails',
        'opportunity_state' => 'setOpportunityState',
        'responsible_user_id' => 'setResponsibleUserId',
        'category_id' => 'setCategoryId',
        'image_url' => 'setImageUrl',
        'bid_currency' => 'setBidCurrency',
        'bid_amount' => 'setBidAmount',
        'bid_type' => 'setBidType',
        'bid_duration' => 'setBidDuration',
        'actual_close_date' => 'setActualCloseDate',
        'probability' => 'setProbability',
        'forecast_close_date' => 'setForecastCloseDate',
        'owner_user_id' => 'setOwnerUserId',
        'pipeline_id' => 'setPipelineId',
        'stage_id' => 'setStageId',
        'organisation_id' => 'setOrganisationId',
        'customfields' => 'setCustomfields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opportunity_id' => 'getOpportunityId',
        'opportunity_name' => 'getOpportunityName',
        'opportunity_details' => 'getOpportunityDetails',
        'opportunity_state' => 'getOpportunityState',
        'responsible_user_id' => 'getResponsibleUserId',
        'category_id' => 'getCategoryId',
        'image_url' => 'getImageUrl',
        'bid_currency' => 'getBidCurrency',
        'bid_amount' => 'getBidAmount',
        'bid_type' => 'getBidType',
        'bid_duration' => 'getBidDuration',
        'actual_close_date' => 'getActualCloseDate',
        'probability' => 'getProbability',
        'forecast_close_date' => 'getForecastCloseDate',
        'owner_user_id' => 'getOwnerUserId',
        'pipeline_id' => 'getPipelineId',
        'stage_id' => 'getStageId',
        'organisation_id' => 'getOrganisationId',
        'customfields' => 'getCustomfields'
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
        $this->container['opportunity_name'] = isset($data['opportunity_name']) ? $data['opportunity_name'] : null;
        $this->container['opportunity_details'] = isset($data['opportunity_details']) ? $data['opportunity_details'] : null;
        $this->container['opportunity_state'] = isset($data['opportunity_state']) ? $data['opportunity_state'] : null;
        $this->container['responsible_user_id'] = isset($data['responsible_user_id']) ? $data['responsible_user_id'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['bid_currency'] = isset($data['bid_currency']) ? $data['bid_currency'] : null;
        $this->container['bid_amount'] = isset($data['bid_amount']) ? $data['bid_amount'] : null;
        $this->container['bid_type'] = isset($data['bid_type']) ? $data['bid_type'] : null;
        $this->container['bid_duration'] = isset($data['bid_duration']) ? $data['bid_duration'] : null;
        $this->container['actual_close_date'] = isset($data['actual_close_date']) ? $data['actual_close_date'] : null;
        $this->container['probability'] = isset($data['probability']) ? $data['probability'] : null;
        $this->container['forecast_close_date'] = isset($data['forecast_close_date']) ? $data['forecast_close_date'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['pipeline_id'] = isset($data['pipeline_id']) ? $data['pipeline_id'] : null;
        $this->container['stage_id'] = isset($data['stage_id']) ? $data['stage_id'] : null;
        $this->container['organisation_id'] = isset($data['organisation_id']) ? $data['organisation_id'] : null;
        $this->container['customfields'] = isset($data['customfields']) ? $data['customfields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['opportunity_name'] === null) {
            $invalidProperties[] = "'opportunity_name' can't be null";
        }
        if ((strlen($this->container['opportunity_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'opportunity_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['opportunity_details']) && (strlen($this->container['opportunity_details']) > 4000)) {
            $invalidProperties[] = "invalid value for 'opportunity_details', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['opportunity_state']) && (strlen($this->container['opportunity_state']) > 20)) {
            $invalidProperties[] = "invalid value for 'opportunity_state', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['image_url']) && (strlen($this->container['image_url']) > 255)) {
            $invalidProperties[] = "invalid value for 'image_url', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['bid_currency']) && (strlen($this->container['bid_currency']) > 20)) {
            $invalidProperties[] = "invalid value for 'bid_currency', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['bid_type']) && (strlen($this->container['bid_type']) > 20)) {
            $invalidProperties[] = "invalid value for 'bid_type', the character length must be smaller than or equal to 20.";
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

        if ($this->container['opportunity_name'] === null) {
            return false;
        }
        if (strlen($this->container['opportunity_name']) > 255) {
            return false;
        }
        if (strlen($this->container['opportunity_details']) > 4000) {
            return false;
        }
        if (strlen($this->container['opportunity_state']) > 20) {
            return false;
        }
        if (strlen($this->container['image_url']) > 255) {
            return false;
        }
        if (strlen($this->container['bid_currency']) > 20) {
            return false;
        }
        if (strlen($this->container['bid_type']) > 20) {
            return false;
        }
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
     * Gets opportunity_name
     *
     * @return string
     */
    public function getOpportunityName()
    {
        return $this->container['opportunity_name'];
    }

    /**
     * Sets opportunity_name
     *
     * @param string $opportunity_name opportunity_name
     *
     * @return $this
     */
    public function setOpportunityName($opportunity_name)
    {
        if ((strlen($opportunity_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $opportunity_name when calling Opportunity2., must be smaller than or equal to 255.');
        }

        $this->container['opportunity_name'] = $opportunity_name;

        return $this;
    }

    /**
     * Gets opportunity_details
     *
     * @return string
     */
    public function getOpportunityDetails()
    {
        return $this->container['opportunity_details'];
    }

    /**
     * Sets opportunity_details
     *
     * @param string $opportunity_details opportunity_details
     *
     * @return $this
     */
    public function setOpportunityDetails($opportunity_details)
    {
        if (!is_null($opportunity_details) && (strlen($opportunity_details) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $opportunity_details when calling Opportunity2., must be smaller than or equal to 4000.');
        }

        $this->container['opportunity_details'] = $opportunity_details;

        return $this;
    }

    /**
     * Gets opportunity_state
     *
     * @return string
     */
    public function getOpportunityState()
    {
        return $this->container['opportunity_state'];
    }

    /**
     * Sets opportunity_state
     *
     * @param string $opportunity_state opportunity_state
     *
     * @return $this
     */
    public function setOpportunityState($opportunity_state)
    {
        if (!is_null($opportunity_state) && (strlen($opportunity_state) > 20)) {
            throw new \InvalidArgumentException('invalid length for $opportunity_state when calling Opportunity2., must be smaller than or equal to 20.');
        }

        $this->container['opportunity_state'] = $opportunity_state;

        return $this;
    }

    /**
     * Gets responsible_user_id
     *
     * @return int
     */
    public function getResponsibleUserId()
    {
        return $this->container['responsible_user_id'];
    }

    /**
     * Sets responsible_user_id
     *
     * @param int $responsible_user_id responsible_user_id
     *
     * @return $this
     */
    public function setResponsibleUserId($responsible_user_id)
    {
        $this->container['responsible_user_id'] = $responsible_user_id;

        return $this;
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
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url image_url
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        if (!is_null($image_url) && (strlen($image_url) > 255)) {
            throw new \InvalidArgumentException('invalid length for $image_url when calling Opportunity2., must be smaller than or equal to 255.');
        }

        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets bid_currency
     *
     * @return string
     */
    public function getBidCurrency()
    {
        return $this->container['bid_currency'];
    }

    /**
     * Sets bid_currency
     *
     * @param string $bid_currency bid_currency
     *
     * @return $this
     */
    public function setBidCurrency($bid_currency)
    {
        if (!is_null($bid_currency) && (strlen($bid_currency) > 20)) {
            throw new \InvalidArgumentException('invalid length for $bid_currency when calling Opportunity2., must be smaller than or equal to 20.');
        }

        $this->container['bid_currency'] = $bid_currency;

        return $this;
    }

    /**
     * Gets bid_amount
     *
     * @return int
     */
    public function getBidAmount()
    {
        return $this->container['bid_amount'];
    }

    /**
     * Sets bid_amount
     *
     * @param int $bid_amount bid_amount
     *
     * @return $this
     */
    public function setBidAmount($bid_amount)
    {
        $this->container['bid_amount'] = $bid_amount;

        return $this;
    }

    /**
     * Gets bid_type
     *
     * @return string
     */
    public function getBidType()
    {
        return $this->container['bid_type'];
    }

    /**
     * Sets bid_type
     *
     * @param string $bid_type bid_type
     *
     * @return $this
     */
    public function setBidType($bid_type)
    {
        if (!is_null($bid_type) && (strlen($bid_type) > 20)) {
            throw new \InvalidArgumentException('invalid length for $bid_type when calling Opportunity2., must be smaller than or equal to 20.');
        }

        $this->container['bid_type'] = $bid_type;

        return $this;
    }

    /**
     * Gets bid_duration
     *
     * @return int
     */
    public function getBidDuration()
    {
        return $this->container['bid_duration'];
    }

    /**
     * Sets bid_duration
     *
     * @param int $bid_duration bid_duration
     *
     * @return $this
     */
    public function setBidDuration($bid_duration)
    {
        $this->container['bid_duration'] = $bid_duration;

        return $this;
    }

    /**
     * Gets actual_close_date
     *
     * @return \DateTime
     */
    public function getActualCloseDate()
    {
        return $this->container['actual_close_date'];
    }

    /**
     * Sets actual_close_date
     *
     * @param \DateTime $actual_close_date actual_close_date
     *
     * @return $this
     */
    public function setActualCloseDate($actual_close_date)
    {
        $this->container['actual_close_date'] = $actual_close_date;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return int
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param int $probability probability
     *
     * @return $this
     */
    public function setProbability($probability)
    {
        $this->container['probability'] = $probability;

        return $this;
    }

    /**
     * Gets forecast_close_date
     *
     * @return \DateTime
     */
    public function getForecastCloseDate()
    {
        return $this->container['forecast_close_date'];
    }

    /**
     * Sets forecast_close_date
     *
     * @param \DateTime $forecast_close_date forecast_close_date
     *
     * @return $this
     */
    public function setForecastCloseDate($forecast_close_date)
    {
        $this->container['forecast_close_date'] = $forecast_close_date;

        return $this;
    }

    /**
     * Gets owner_user_id
     *
     * @return int
     */
    public function getOwnerUserId()
    {
        return $this->container['owner_user_id'];
    }

    /**
     * Sets owner_user_id
     *
     * @param int $owner_user_id owner_user_id
     *
     * @return $this
     */
    public function setOwnerUserId($owner_user_id)
    {
        $this->container['owner_user_id'] = $owner_user_id;

        return $this;
    }

    /**
     * Gets pipeline_id
     *
     * @return int
     */
    public function getPipelineId()
    {
        return $this->container['pipeline_id'];
    }

    /**
     * Sets pipeline_id
     *
     * @param int $pipeline_id pipeline_id
     *
     * @return $this
     */
    public function setPipelineId($pipeline_id)
    {
        $this->container['pipeline_id'] = $pipeline_id;

        return $this;
    }

    /**
     * Gets stage_id
     *
     * @return int
     */
    public function getStageId()
    {
        return $this->container['stage_id'];
    }

    /**
     * Sets stage_id
     *
     * @param int $stage_id stage_id
     *
     * @return $this
     */
    public function setStageId($stage_id)
    {
        $this->container['stage_id'] = $stage_id;

        return $this;
    }

    /**
     * Gets organisation_id
     *
     * @return int
     */
    public function getOrganisationId()
    {
        return $this->container['organisation_id'];
    }

    /**
     * Sets organisation_id
     *
     * @param int $organisation_id organisation_id
     *
     * @return $this
     */
    public function setOrganisationId($organisation_id)
    {
        $this->container['organisation_id'] = $organisation_id;

        return $this;
    }

    /**
     * Gets customfields
     *
     * @return \Swagger\Client\Model\APICustomField[]
     */
    public function getCustomfields()
    {
        return $this->container['customfields'];
    }

    /**
     * Sets customfields
     *
     * @param \Swagger\Client\Model\APICustomField[] $customfields customfields
     *
     * @return $this
     */
    public function setCustomfields($customfields)
    {
        $this->container['customfields'] = $customfields;

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

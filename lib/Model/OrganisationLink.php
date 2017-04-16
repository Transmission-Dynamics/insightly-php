<?php
/**
 * OrganisationLink
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
 * OrganisationLink Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrganisationLink implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrganisationLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'org_link_id' => 'int',
        'first_organisation_id' => 'int',
        'second_organisation_id' => 'int',
        'relationship_id' => 'int',
        'details' => 'string'
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
        'org_link_id' => 'ORG_LINK_ID',
        'first_organisation_id' => 'FIRST_ORGANISATION_ID',
        'second_organisation_id' => 'SECOND_ORGANISATION_ID',
        'relationship_id' => 'RELATIONSHIP_ID',
        'details' => 'DETAILS'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'org_link_id' => 'setOrgLinkId',
        'first_organisation_id' => 'setFirstOrganisationId',
        'second_organisation_id' => 'setSecondOrganisationId',
        'relationship_id' => 'setRelationshipId',
        'details' => 'setDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'org_link_id' => 'getOrgLinkId',
        'first_organisation_id' => 'getFirstOrganisationId',
        'second_organisation_id' => 'getSecondOrganisationId',
        'relationship_id' => 'getRelationshipId',
        'details' => 'getDetails'
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
        $this->container['org_link_id'] = isset($data['org_link_id']) ? $data['org_link_id'] : null;
        $this->container['first_organisation_id'] = isset($data['first_organisation_id']) ? $data['first_organisation_id'] : null;
        $this->container['second_organisation_id'] = isset($data['second_organisation_id']) ? $data['second_organisation_id'] : null;
        $this->container['relationship_id'] = isset($data['relationship_id']) ? $data['relationship_id'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (!is_null($this->container['details']) && (strlen($this->container['details']) > 255)) {
            $invalid_properties[] = "invalid value for 'details', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['details']) && (strlen($this->container['details']) < 0)) {
            $invalid_properties[] = "invalid value for 'details', the character length must be bigger than or equal to 0.";
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
        if (strlen($this->container['details']) > 255) {
            return false;
        }
        if (strlen($this->container['details']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets org_link_id
     * @return int
     */
    public function getOrgLinkId()
    {
        return $this->container['org_link_id'];
    }

    /**
     * Sets org_link_id
     * @param int $org_link_id
     * @return $this
     */
    public function setOrgLinkId($org_link_id)
    {
        $this->container['org_link_id'] = $org_link_id;

        return $this;
    }

    /**
     * Gets first_organisation_id
     * @return int
     */
    public function getFirstOrganisationId()
    {
        return $this->container['first_organisation_id'];
    }

    /**
     * Sets first_organisation_id
     * @param int $first_organisation_id
     * @return $this
     */
    public function setFirstOrganisationId($first_organisation_id)
    {
        $this->container['first_organisation_id'] = $first_organisation_id;

        return $this;
    }

    /**
     * Gets second_organisation_id
     * @return int
     */
    public function getSecondOrganisationId()
    {
        return $this->container['second_organisation_id'];
    }

    /**
     * Sets second_organisation_id
     * @param int $second_organisation_id
     * @return $this
     */
    public function setSecondOrganisationId($second_organisation_id)
    {
        $this->container['second_organisation_id'] = $second_organisation_id;

        return $this;
    }

    /**
     * Gets relationship_id
     * @return int
     */
    public function getRelationshipId()
    {
        return $this->container['relationship_id'];
    }

    /**
     * Sets relationship_id
     * @param int $relationship_id
     * @return $this
     */
    public function setRelationshipId($relationship_id)
    {
        $this->container['relationship_id'] = $relationship_id;

        return $this;
    }

    /**
     * Gets details
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param string $details
     * @return $this
     */
    public function setDetails($details)
    {
        if (!is_null($details) && (strlen($details) > 255)) {
            throw new \InvalidArgumentException('invalid length for $details when calling OrganisationLink., must be smaller than or equal to 255.');
        }
        if (!is_null($details) && (strlen($details) < 0)) {
            throw new \InvalidArgumentException('invalid length for $details when calling OrganisationLink., must be bigger than or equal to 0.');
        }

        $this->container['details'] = $details;

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

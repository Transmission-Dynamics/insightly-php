<?php
/**
 * APIComment
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
 * APIComment Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APIComment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APIComment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comment_id' => 'int',
        'body' => 'string',
        'owner_user_id' => 'int',
        'date_created_utc' => '\DateTime',
        'date_updated_utc' => '\DateTime',
        'note_id' => 'int',
        'task_id' => 'int',
        'email_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comment_id' => 'int64',
        'body' => 'string',
        'owner_user_id' => 'int32',
        'date_created_utc' => 'date-time',
        'date_updated_utc' => 'date-time',
        'note_id' => 'int64',
        'task_id' => 'int64',
        'email_id' => 'int64'
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
        'comment_id' => 'COMMENT_ID',
        'body' => 'BODY',
        'owner_user_id' => 'OWNER_USER_ID',
        'date_created_utc' => 'DATE_CREATED_UTC',
        'date_updated_utc' => 'DATE_UPDATED_UTC',
        'note_id' => 'NOTE_ID',
        'task_id' => 'TASK_ID',
        'email_id' => 'EMAIL_ID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment_id' => 'setCommentId',
        'body' => 'setBody',
        'owner_user_id' => 'setOwnerUserId',
        'date_created_utc' => 'setDateCreatedUtc',
        'date_updated_utc' => 'setDateUpdatedUtc',
        'note_id' => 'setNoteId',
        'task_id' => 'setTaskId',
        'email_id' => 'setEmailId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment_id' => 'getCommentId',
        'body' => 'getBody',
        'owner_user_id' => 'getOwnerUserId',
        'date_created_utc' => 'getDateCreatedUtc',
        'date_updated_utc' => 'getDateUpdatedUtc',
        'note_id' => 'getNoteId',
        'task_id' => 'getTaskId',
        'email_id' => 'getEmailId'
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
        $this->container['comment_id'] = isset($data['comment_id']) ? $data['comment_id'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['date_created_utc'] = isset($data['date_created_utc']) ? $data['date_created_utc'] : null;
        $this->container['date_updated_utc'] = isset($data['date_updated_utc']) ? $data['date_updated_utc'] : null;
        $this->container['note_id'] = isset($data['note_id']) ? $data['note_id'] : null;
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['email_id'] = isset($data['email_id']) ? $data['email_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['body']) && (strlen($this->container['body']) > 200)) {
            $invalidProperties[] = "invalid value for 'body', the character length must be smaller than or equal to 200.";
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

        if (strlen($this->container['body']) > 200) {
            return false;
        }
        return true;
    }


    /**
     * Gets comment_id
     *
     * @return int
     */
    public function getCommentId()
    {
        return $this->container['comment_id'];
    }

    /**
     * Sets comment_id
     *
     * @param int $comment_id comment_id
     *
     * @return $this
     */
    public function setCommentId($comment_id)
    {
        $this->container['comment_id'] = $comment_id;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body body
     *
     * @return $this
     */
    public function setBody($body)
    {
        if (!is_null($body) && (strlen($body) > 200)) {
            throw new \InvalidArgumentException('invalid length for $body when calling APIComment., must be smaller than or equal to 200.');
        }

        $this->container['body'] = $body;

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
     * Gets date_created_utc
     *
     * @return \DateTime
     */
    public function getDateCreatedUtc()
    {
        return $this->container['date_created_utc'];
    }

    /**
     * Sets date_created_utc
     *
     * @param \DateTime $date_created_utc date_created_utc
     *
     * @return $this
     */
    public function setDateCreatedUtc($date_created_utc)
    {
        $this->container['date_created_utc'] = $date_created_utc;

        return $this;
    }

    /**
     * Gets date_updated_utc
     *
     * @return \DateTime
     */
    public function getDateUpdatedUtc()
    {
        return $this->container['date_updated_utc'];
    }

    /**
     * Sets date_updated_utc
     *
     * @param \DateTime $date_updated_utc date_updated_utc
     *
     * @return $this
     */
    public function setDateUpdatedUtc($date_updated_utc)
    {
        $this->container['date_updated_utc'] = $date_updated_utc;

        return $this;
    }

    /**
     * Gets note_id
     *
     * @return int
     */
    public function getNoteId()
    {
        return $this->container['note_id'];
    }

    /**
     * Sets note_id
     *
     * @param int $note_id note_id
     *
     * @return $this
     */
    public function setNoteId($note_id)
    {
        $this->container['note_id'] = $note_id;

        return $this;
    }

    /**
     * Gets task_id
     *
     * @return int
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param int $task_id task_id
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets email_id
     *
     * @return int
     */
    public function getEmailId()
    {
        return $this->container['email_id'];
    }

    /**
     * Sets email_id
     *
     * @param int $email_id email_id
     *
     * @return $this
     */
    public function setEmailId($email_id)
    {
        $this->container['email_id'] = $email_id;

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

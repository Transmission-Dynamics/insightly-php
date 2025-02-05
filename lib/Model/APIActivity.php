<?php
/**
 * APIActivity
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
 * APIActivity Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APIActivity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APIActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activity_id' => 'int',
        'activityset_id' => 'int',
        'activity_name' => 'string',
        'activity_details' => 'string',
        'activity_type' => 'string',
        'category_id' => 'int',
        'reminder' => 'bool',
        'reminder_days_before_due' => 'int',
        'reminder_time' => 'string',
        'publicly_visible' => 'bool',
        'owner_visible' => 'bool',
        'owner_user_id' => 'int',
        'responsible_user_id' => 'int',
        'assigned_team_id' => 'int',
        'skip_sun' => 'bool',
        'skip_mon' => 'bool',
        'skip_tue' => 'bool',
        'skip_wed' => 'bool',
        'skip_thu' => 'bool',
        'skip_fri' => 'bool',
        'skip_sat' => 'bool',
        'due_days_after_start' => 'int',
        'due_days_before_end' => 'int',
        'event_days_after_start' => 'int',
        'event_days_before_end' => 'int',
        'event_time' => 'string',
        'all_day' => 'bool',
        'duration' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activity_id' => 'int64',
        'activityset_id' => 'int64',
        'activity_name' => null,
        'activity_details' => null,
        'activity_type' => null,
        'category_id' => 'int64',
        'reminder' => null,
        'reminder_days_before_due' => 'int32',
        'reminder_time' => null,
        'publicly_visible' => null,
        'owner_visible' => null,
        'owner_user_id' => 'int32',
        'responsible_user_id' => 'int32',
        'assigned_team_id' => 'int64',
        'skip_sun' => null,
        'skip_mon' => null,
        'skip_tue' => null,
        'skip_wed' => null,
        'skip_thu' => null,
        'skip_fri' => null,
        'skip_sat' => null,
        'due_days_after_start' => 'int32',
        'due_days_before_end' => 'int32',
        'event_days_after_start' => 'int32',
        'event_days_before_end' => 'int32',
        'event_time' => null,
        'all_day' => null,
        'duration' => 'int32'
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
        'activity_id' => 'ACTIVITY_ID',
        'activityset_id' => 'ACTIVITYSET_ID',
        'activity_name' => 'ACTIVITY_NAME',
        'activity_details' => 'ACTIVITY_DETAILS',
        'activity_type' => 'ACTIVITY_TYPE',
        'category_id' => 'CATEGORY_ID',
        'reminder' => 'REMINDER',
        'reminder_days_before_due' => 'REMINDER_DAYS_BEFORE_DUE',
        'reminder_time' => 'REMINDER_TIME',
        'publicly_visible' => 'PUBLICLY_VISIBLE',
        'owner_visible' => 'OWNER_VISIBLE',
        'owner_user_id' => 'OWNER_USER_ID',
        'responsible_user_id' => 'RESPONSIBLE_USER_ID',
        'assigned_team_id' => 'ASSIGNED_TEAM_ID',
        'skip_sun' => 'SKIP_SUN',
        'skip_mon' => 'SKIP_MON',
        'skip_tue' => 'SKIP_TUE',
        'skip_wed' => 'SKIP_WED',
        'skip_thu' => 'SKIP_THU',
        'skip_fri' => 'SKIP_FRI',
        'skip_sat' => 'SKIP_SAT',
        'due_days_after_start' => 'DUE_DAYS_AFTER_START',
        'due_days_before_end' => 'DUE_DAYS_BEFORE_END',
        'event_days_after_start' => 'EVENT_DAYS_AFTER_START',
        'event_days_before_end' => 'EVENT_DAYS_BEFORE_END',
        'event_time' => 'EVENT_TIME',
        'all_day' => 'ALL_DAY',
        'duration' => 'DURATION'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity_id' => 'setActivityId',
        'activityset_id' => 'setActivitysetId',
        'activity_name' => 'setActivityName',
        'activity_details' => 'setActivityDetails',
        'activity_type' => 'setActivityType',
        'category_id' => 'setCategoryId',
        'reminder' => 'setReminder',
        'reminder_days_before_due' => 'setReminderDaysBeforeDue',
        'reminder_time' => 'setReminderTime',
        'publicly_visible' => 'setPubliclyVisible',
        'owner_visible' => 'setOwnerVisible',
        'owner_user_id' => 'setOwnerUserId',
        'responsible_user_id' => 'setResponsibleUserId',
        'assigned_team_id' => 'setAssignedTeamId',
        'skip_sun' => 'setSkipSun',
        'skip_mon' => 'setSkipMon',
        'skip_tue' => 'setSkipTue',
        'skip_wed' => 'setSkipWed',
        'skip_thu' => 'setSkipThu',
        'skip_fri' => 'setSkipFri',
        'skip_sat' => 'setSkipSat',
        'due_days_after_start' => 'setDueDaysAfterStart',
        'due_days_before_end' => 'setDueDaysBeforeEnd',
        'event_days_after_start' => 'setEventDaysAfterStart',
        'event_days_before_end' => 'setEventDaysBeforeEnd',
        'event_time' => 'setEventTime',
        'all_day' => 'setAllDay',
        'duration' => 'setDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity_id' => 'getActivityId',
        'activityset_id' => 'getActivitysetId',
        'activity_name' => 'getActivityName',
        'activity_details' => 'getActivityDetails',
        'activity_type' => 'getActivityType',
        'category_id' => 'getCategoryId',
        'reminder' => 'getReminder',
        'reminder_days_before_due' => 'getReminderDaysBeforeDue',
        'reminder_time' => 'getReminderTime',
        'publicly_visible' => 'getPubliclyVisible',
        'owner_visible' => 'getOwnerVisible',
        'owner_user_id' => 'getOwnerUserId',
        'responsible_user_id' => 'getResponsibleUserId',
        'assigned_team_id' => 'getAssignedTeamId',
        'skip_sun' => 'getSkipSun',
        'skip_mon' => 'getSkipMon',
        'skip_tue' => 'getSkipTue',
        'skip_wed' => 'getSkipWed',
        'skip_thu' => 'getSkipThu',
        'skip_fri' => 'getSkipFri',
        'skip_sat' => 'getSkipSat',
        'due_days_after_start' => 'getDueDaysAfterStart',
        'due_days_before_end' => 'getDueDaysBeforeEnd',
        'event_days_after_start' => 'getEventDaysAfterStart',
        'event_days_before_end' => 'getEventDaysBeforeEnd',
        'event_time' => 'getEventTime',
        'all_day' => 'getAllDay',
        'duration' => 'getDuration'
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
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['activityset_id'] = isset($data['activityset_id']) ? $data['activityset_id'] : null;
        $this->container['activity_name'] = isset($data['activity_name']) ? $data['activity_name'] : null;
        $this->container['activity_details'] = isset($data['activity_details']) ? $data['activity_details'] : null;
        $this->container['activity_type'] = isset($data['activity_type']) ? $data['activity_type'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['reminder'] = isset($data['reminder']) ? $data['reminder'] : null;
        $this->container['reminder_days_before_due'] = isset($data['reminder_days_before_due']) ? $data['reminder_days_before_due'] : null;
        $this->container['reminder_time'] = isset($data['reminder_time']) ? $data['reminder_time'] : null;
        $this->container['publicly_visible'] = isset($data['publicly_visible']) ? $data['publicly_visible'] : null;
        $this->container['owner_visible'] = isset($data['owner_visible']) ? $data['owner_visible'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['responsible_user_id'] = isset($data['responsible_user_id']) ? $data['responsible_user_id'] : null;
        $this->container['assigned_team_id'] = isset($data['assigned_team_id']) ? $data['assigned_team_id'] : null;
        $this->container['skip_sun'] = isset($data['skip_sun']) ? $data['skip_sun'] : null;
        $this->container['skip_mon'] = isset($data['skip_mon']) ? $data['skip_mon'] : null;
        $this->container['skip_tue'] = isset($data['skip_tue']) ? $data['skip_tue'] : null;
        $this->container['skip_wed'] = isset($data['skip_wed']) ? $data['skip_wed'] : null;
        $this->container['skip_thu'] = isset($data['skip_thu']) ? $data['skip_thu'] : null;
        $this->container['skip_fri'] = isset($data['skip_fri']) ? $data['skip_fri'] : null;
        $this->container['skip_sat'] = isset($data['skip_sat']) ? $data['skip_sat'] : null;
        $this->container['due_days_after_start'] = isset($data['due_days_after_start']) ? $data['due_days_after_start'] : null;
        $this->container['due_days_before_end'] = isset($data['due_days_before_end']) ? $data['due_days_before_end'] : null;
        $this->container['event_days_after_start'] = isset($data['event_days_after_start']) ? $data['event_days_after_start'] : null;
        $this->container['event_days_before_end'] = isset($data['event_days_before_end']) ? $data['event_days_before_end'] : null;
        $this->container['event_time'] = isset($data['event_time']) ? $data['event_time'] : null;
        $this->container['all_day'] = isset($data['all_day']) ? $data['all_day'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
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
     * Gets activity_id
     *
     * @return int
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     *
     * @param int $activity_id activity_id
     *
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets activityset_id
     *
     * @return int
     */
    public function getActivitysetId()
    {
        return $this->container['activityset_id'];
    }

    /**
     * Sets activityset_id
     *
     * @param int $activityset_id activityset_id
     *
     * @return $this
     */
    public function setActivitysetId($activityset_id)
    {
        $this->container['activityset_id'] = $activityset_id;

        return $this;
    }

    /**
     * Gets activity_name
     *
     * @return string
     */
    public function getActivityName()
    {
        return $this->container['activity_name'];
    }

    /**
     * Sets activity_name
     *
     * @param string $activity_name activity_name
     *
     * @return $this
     */
    public function setActivityName($activity_name)
    {
        $this->container['activity_name'] = $activity_name;

        return $this;
    }

    /**
     * Gets activity_details
     *
     * @return string
     */
    public function getActivityDetails()
    {
        return $this->container['activity_details'];
    }

    /**
     * Sets activity_details
     *
     * @param string $activity_details activity_details
     *
     * @return $this
     */
    public function setActivityDetails($activity_details)
    {
        $this->container['activity_details'] = $activity_details;

        return $this;
    }

    /**
     * Gets activity_type
     *
     * @return string
     */
    public function getActivityType()
    {
        return $this->container['activity_type'];
    }

    /**
     * Sets activity_type
     *
     * @param string $activity_type activity_type
     *
     * @return $this
     */
    public function setActivityType($activity_type)
    {
        $this->container['activity_type'] = $activity_type;

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
     * Gets reminder
     *
     * @return bool
     */
    public function getReminder()
    {
        return $this->container['reminder'];
    }

    /**
     * Sets reminder
     *
     * @param bool $reminder reminder
     *
     * @return $this
     */
    public function setReminder($reminder)
    {
        $this->container['reminder'] = $reminder;

        return $this;
    }

    /**
     * Gets reminder_days_before_due
     *
     * @return int
     */
    public function getReminderDaysBeforeDue()
    {
        return $this->container['reminder_days_before_due'];
    }

    /**
     * Sets reminder_days_before_due
     *
     * @param int $reminder_days_before_due reminder_days_before_due
     *
     * @return $this
     */
    public function setReminderDaysBeforeDue($reminder_days_before_due)
    {
        $this->container['reminder_days_before_due'] = $reminder_days_before_due;

        return $this;
    }

    /**
     * Gets reminder_time
     *
     * @return string
     */
    public function getReminderTime()
    {
        return $this->container['reminder_time'];
    }

    /**
     * Sets reminder_time
     *
     * @param string $reminder_time reminder_time
     *
     * @return $this
     */
    public function setReminderTime($reminder_time)
    {
        $this->container['reminder_time'] = $reminder_time;

        return $this;
    }

    /**
     * Gets publicly_visible
     *
     * @return bool
     */
    public function getPubliclyVisible()
    {
        return $this->container['publicly_visible'];
    }

    /**
     * Sets publicly_visible
     *
     * @param bool $publicly_visible publicly_visible
     *
     * @return $this
     */
    public function setPubliclyVisible($publicly_visible)
    {
        $this->container['publicly_visible'] = $publicly_visible;

        return $this;
    }

    /**
     * Gets owner_visible
     *
     * @return bool
     */
    public function getOwnerVisible()
    {
        return $this->container['owner_visible'];
    }

    /**
     * Sets owner_visible
     *
     * @param bool $owner_visible owner_visible
     *
     * @return $this
     */
    public function setOwnerVisible($owner_visible)
    {
        $this->container['owner_visible'] = $owner_visible;

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
     * Gets assigned_team_id
     *
     * @return int
     */
    public function getAssignedTeamId()
    {
        return $this->container['assigned_team_id'];
    }

    /**
     * Sets assigned_team_id
     *
     * @param int $assigned_team_id assigned_team_id
     *
     * @return $this
     */
    public function setAssignedTeamId($assigned_team_id)
    {
        $this->container['assigned_team_id'] = $assigned_team_id;

        return $this;
    }

    /**
     * Gets skip_sun
     *
     * @return bool
     */
    public function getSkipSun()
    {
        return $this->container['skip_sun'];
    }

    /**
     * Sets skip_sun
     *
     * @param bool $skip_sun skip_sun
     *
     * @return $this
     */
    public function setSkipSun($skip_sun)
    {
        $this->container['skip_sun'] = $skip_sun;

        return $this;
    }

    /**
     * Gets skip_mon
     *
     * @return bool
     */
    public function getSkipMon()
    {
        return $this->container['skip_mon'];
    }

    /**
     * Sets skip_mon
     *
     * @param bool $skip_mon skip_mon
     *
     * @return $this
     */
    public function setSkipMon($skip_mon)
    {
        $this->container['skip_mon'] = $skip_mon;

        return $this;
    }

    /**
     * Gets skip_tue
     *
     * @return bool
     */
    public function getSkipTue()
    {
        return $this->container['skip_tue'];
    }

    /**
     * Sets skip_tue
     *
     * @param bool $skip_tue skip_tue
     *
     * @return $this
     */
    public function setSkipTue($skip_tue)
    {
        $this->container['skip_tue'] = $skip_tue;

        return $this;
    }

    /**
     * Gets skip_wed
     *
     * @return bool
     */
    public function getSkipWed()
    {
        return $this->container['skip_wed'];
    }

    /**
     * Sets skip_wed
     *
     * @param bool $skip_wed skip_wed
     *
     * @return $this
     */
    public function setSkipWed($skip_wed)
    {
        $this->container['skip_wed'] = $skip_wed;

        return $this;
    }

    /**
     * Gets skip_thu
     *
     * @return bool
     */
    public function getSkipThu()
    {
        return $this->container['skip_thu'];
    }

    /**
     * Sets skip_thu
     *
     * @param bool $skip_thu skip_thu
     *
     * @return $this
     */
    public function setSkipThu($skip_thu)
    {
        $this->container['skip_thu'] = $skip_thu;

        return $this;
    }

    /**
     * Gets skip_fri
     *
     * @return bool
     */
    public function getSkipFri()
    {
        return $this->container['skip_fri'];
    }

    /**
     * Sets skip_fri
     *
     * @param bool $skip_fri skip_fri
     *
     * @return $this
     */
    public function setSkipFri($skip_fri)
    {
        $this->container['skip_fri'] = $skip_fri;

        return $this;
    }

    /**
     * Gets skip_sat
     *
     * @return bool
     */
    public function getSkipSat()
    {
        return $this->container['skip_sat'];
    }

    /**
     * Sets skip_sat
     *
     * @param bool $skip_sat skip_sat
     *
     * @return $this
     */
    public function setSkipSat($skip_sat)
    {
        $this->container['skip_sat'] = $skip_sat;

        return $this;
    }

    /**
     * Gets due_days_after_start
     *
     * @return int
     */
    public function getDueDaysAfterStart()
    {
        return $this->container['due_days_after_start'];
    }

    /**
     * Sets due_days_after_start
     *
     * @param int $due_days_after_start due_days_after_start
     *
     * @return $this
     */
    public function setDueDaysAfterStart($due_days_after_start)
    {
        $this->container['due_days_after_start'] = $due_days_after_start;

        return $this;
    }

    /**
     * Gets due_days_before_end
     *
     * @return int
     */
    public function getDueDaysBeforeEnd()
    {
        return $this->container['due_days_before_end'];
    }

    /**
     * Sets due_days_before_end
     *
     * @param int $due_days_before_end due_days_before_end
     *
     * @return $this
     */
    public function setDueDaysBeforeEnd($due_days_before_end)
    {
        $this->container['due_days_before_end'] = $due_days_before_end;

        return $this;
    }

    /**
     * Gets event_days_after_start
     *
     * @return int
     */
    public function getEventDaysAfterStart()
    {
        return $this->container['event_days_after_start'];
    }

    /**
     * Sets event_days_after_start
     *
     * @param int $event_days_after_start event_days_after_start
     *
     * @return $this
     */
    public function setEventDaysAfterStart($event_days_after_start)
    {
        $this->container['event_days_after_start'] = $event_days_after_start;

        return $this;
    }

    /**
     * Gets event_days_before_end
     *
     * @return int
     */
    public function getEventDaysBeforeEnd()
    {
        return $this->container['event_days_before_end'];
    }

    /**
     * Sets event_days_before_end
     *
     * @param int $event_days_before_end event_days_before_end
     *
     * @return $this
     */
    public function setEventDaysBeforeEnd($event_days_before_end)
    {
        $this->container['event_days_before_end'] = $event_days_before_end;

        return $this;
    }

    /**
     * Gets event_time
     *
     * @return string
     */
    public function getEventTime()
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time
     *
     * @param string $event_time event_time
     *
     * @return $this
     */
    public function setEventTime($event_time)
    {
        $this->container['event_time'] = $event_time;

        return $this;
    }

    /**
     * Gets all_day
     *
     * @return bool
     */
    public function getAllDay()
    {
        return $this->container['all_day'];
    }

    /**
     * Sets all_day
     *
     * @param bool $all_day all_day
     *
     * @return $this
     */
    public function setAllDay($all_day)
    {
        $this->container['all_day'] = $all_day;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

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

<?php
/**
 * MeetingHistory
 *
 * PHP version 5
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans Meetings REST API
 *
 * ## Video That Works Where You Do. <p>This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you can see and try actual API calls to manage User Accounts, Meetings, and Recordings, pull Analytical Data and Current State information.</p>    <nosdk> <hr> <div> <div class=\"key\">     <a href=\"./basics.html\" target=\"_\"><img class=\"keyimg\" src=\"./img/bjnmeeting.png\"/></a> </div> <div class=\"keybox\"> Basic instructions about What is a BlueJeans Meeting, and Getting Started Using API's, are <a href=\"./basics.html\" target=\"_blank\">available here <i class=\"glyphicon glyphicon-new-window\"></i></a>. </div> </div> <hr> <alert>2/21/2019</alert> Change response of Change layout and Endpoint API's to 204<br/> 12/03/2018 Add API for setting user profile photograph.<br/> 10/17/2018 Updated API field definitions for time variables to be 64-bit .<br/> 7/23/2018 Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> </nosdk> <hr>
 *
 * OpenAPI spec version: 1.0.4402212019
 * Contact: glenn@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BlueJeansMeetingsRestApi\Model;

use \ArrayAccess;
use \BlueJeansMeetingsRestApi\ObjectSerializer;

/**
 * MeetingHistory Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MeetingHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MeetingHistory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meeting_guid' => 'string',
        'meeting_numeric_id' => 'string',
        'title' => 'string',
        'description' => 'string',
        'leader_info' => '\BlueJeansMeetingsRestApi\Model\MeetingHistoryLeaderInfo',
        'user_id' => 'int',
        'meeting_duration' => 'int',
        'max_participant_count' => 'int',
        'total_participant_minutes' => 'int',
        'max_participant_minutes' => 'int',
        'extra_participant_minutes' => 'int',
        'isdn_endpoints' => 'int',
        'total_dialout_minutes' => 'int',
        'total_toll_free_minutes' => 'int',
        'call_did_minutes' => 'int',
        'start_time' => 'int',
        'end_time' => 'int',
        'meeting_status' => 'string',
        'meeting_thumbnail' => 'string',
        'start_time_zone' => 'string',
        'processing_status' => 'string',
        'concurrent_calls' => 'string',
        'upload_status' => 'string',
        'pstnonly' => 'bool',
        'participant_list' => '\BlueJeansMeetingsRestApi\Model\MeetingHistoryParticipantList[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'meeting_guid' => null,
        'meeting_numeric_id' => null,
        'title' => null,
        'description' => null,
        'leader_info' => null,
        'user_id' => null,
        'meeting_duration' => 'int64',
        'max_participant_count' => null,
        'total_participant_minutes' => null,
        'max_participant_minutes' => null,
        'extra_participant_minutes' => null,
        'isdn_endpoints' => null,
        'total_dialout_minutes' => null,
        'total_toll_free_minutes' => null,
        'call_did_minutes' => null,
        'start_time' => 'int64',
        'end_time' => 'int64',
        'meeting_status' => null,
        'meeting_thumbnail' => null,
        'start_time_zone' => null,
        'processing_status' => null,
        'concurrent_calls' => null,
        'upload_status' => null,
        'pstnonly' => null,
        'participant_list' => null
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
        'meeting_guid' => 'meetingGuid',
        'meeting_numeric_id' => 'meetingNumericId',
        'title' => 'title',
        'description' => 'description',
        'leader_info' => 'leaderInfo',
        'user_id' => 'userId',
        'meeting_duration' => 'meetingDuration',
        'max_participant_count' => 'maxParticipantCount',
        'total_participant_minutes' => 'totalParticipantMinutes',
        'max_participant_minutes' => 'maxParticipantMinutes',
        'extra_participant_minutes' => 'extraParticipantMinutes',
        'isdn_endpoints' => 'isdnEndpoints',
        'total_dialout_minutes' => 'totalDialoutMinutes',
        'total_toll_free_minutes' => 'totalTollFreeMinutes',
        'call_did_minutes' => 'callDIDMinutes',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'meeting_status' => 'meetingStatus',
        'meeting_thumbnail' => 'meetingThumbnail',
        'start_time_zone' => 'startTimeZone',
        'processing_status' => 'processingStatus',
        'concurrent_calls' => 'concurrentCalls',
        'upload_status' => 'uploadStatus',
        'pstnonly' => 'pstnonly',
        'participant_list' => 'participantList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_guid' => 'setMeetingGuid',
        'meeting_numeric_id' => 'setMeetingNumericId',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'leader_info' => 'setLeaderInfo',
        'user_id' => 'setUserId',
        'meeting_duration' => 'setMeetingDuration',
        'max_participant_count' => 'setMaxParticipantCount',
        'total_participant_minutes' => 'setTotalParticipantMinutes',
        'max_participant_minutes' => 'setMaxParticipantMinutes',
        'extra_participant_minutes' => 'setExtraParticipantMinutes',
        'isdn_endpoints' => 'setIsdnEndpoints',
        'total_dialout_minutes' => 'setTotalDialoutMinutes',
        'total_toll_free_minutes' => 'setTotalTollFreeMinutes',
        'call_did_minutes' => 'setCallDidMinutes',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'meeting_status' => 'setMeetingStatus',
        'meeting_thumbnail' => 'setMeetingThumbnail',
        'start_time_zone' => 'setStartTimeZone',
        'processing_status' => 'setProcessingStatus',
        'concurrent_calls' => 'setConcurrentCalls',
        'upload_status' => 'setUploadStatus',
        'pstnonly' => 'setPstnonly',
        'participant_list' => 'setParticipantList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_guid' => 'getMeetingGuid',
        'meeting_numeric_id' => 'getMeetingNumericId',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'leader_info' => 'getLeaderInfo',
        'user_id' => 'getUserId',
        'meeting_duration' => 'getMeetingDuration',
        'max_participant_count' => 'getMaxParticipantCount',
        'total_participant_minutes' => 'getTotalParticipantMinutes',
        'max_participant_minutes' => 'getMaxParticipantMinutes',
        'extra_participant_minutes' => 'getExtraParticipantMinutes',
        'isdn_endpoints' => 'getIsdnEndpoints',
        'total_dialout_minutes' => 'getTotalDialoutMinutes',
        'total_toll_free_minutes' => 'getTotalTollFreeMinutes',
        'call_did_minutes' => 'getCallDidMinutes',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'meeting_status' => 'getMeetingStatus',
        'meeting_thumbnail' => 'getMeetingThumbnail',
        'start_time_zone' => 'getStartTimeZone',
        'processing_status' => 'getProcessingStatus',
        'concurrent_calls' => 'getConcurrentCalls',
        'upload_status' => 'getUploadStatus',
        'pstnonly' => 'getPstnonly',
        'participant_list' => 'getParticipantList'
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

    const MEETING_STATUS_COMPLETE = 'Complete';
    const PROCESSING_STATUS_PROCESSED = 'PROCESSED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMeetingStatusAllowableValues()
    {
        return [
            self::MEETING_STATUS_COMPLETE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingStatusAllowableValues()
    {
        return [
            self::PROCESSING_STATUS_PROCESSED,
        ];
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
        $this->container['meeting_guid'] = isset($data['meeting_guid']) ? $data['meeting_guid'] : null;
        $this->container['meeting_numeric_id'] = isset($data['meeting_numeric_id']) ? $data['meeting_numeric_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['leader_info'] = isset($data['leader_info']) ? $data['leader_info'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['meeting_duration'] = isset($data['meeting_duration']) ? $data['meeting_duration'] : null;
        $this->container['max_participant_count'] = isset($data['max_participant_count']) ? $data['max_participant_count'] : null;
        $this->container['total_participant_minutes'] = isset($data['total_participant_minutes']) ? $data['total_participant_minutes'] : null;
        $this->container['max_participant_minutes'] = isset($data['max_participant_minutes']) ? $data['max_participant_minutes'] : null;
        $this->container['extra_participant_minutes'] = isset($data['extra_participant_minutes']) ? $data['extra_participant_minutes'] : null;
        $this->container['isdn_endpoints'] = isset($data['isdn_endpoints']) ? $data['isdn_endpoints'] : null;
        $this->container['total_dialout_minutes'] = isset($data['total_dialout_minutes']) ? $data['total_dialout_minutes'] : null;
        $this->container['total_toll_free_minutes'] = isset($data['total_toll_free_minutes']) ? $data['total_toll_free_minutes'] : null;
        $this->container['call_did_minutes'] = isset($data['call_did_minutes']) ? $data['call_did_minutes'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['meeting_status'] = isset($data['meeting_status']) ? $data['meeting_status'] : null;
        $this->container['meeting_thumbnail'] = isset($data['meeting_thumbnail']) ? $data['meeting_thumbnail'] : null;
        $this->container['start_time_zone'] = isset($data['start_time_zone']) ? $data['start_time_zone'] : null;
        $this->container['processing_status'] = isset($data['processing_status']) ? $data['processing_status'] : null;
        $this->container['concurrent_calls'] = isset($data['concurrent_calls']) ? $data['concurrent_calls'] : null;
        $this->container['upload_status'] = isset($data['upload_status']) ? $data['upload_status'] : null;
        $this->container['pstnonly'] = isset($data['pstnonly']) ? $data['pstnonly'] : null;
        $this->container['participant_list'] = isset($data['participant_list']) ? $data['participant_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMeetingStatusAllowableValues();
        if (!is_null($this->container['meeting_status']) && !in_array($this->container['meeting_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'meeting_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!is_null($this->container['processing_status']) && !in_array($this->container['processing_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'processing_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets meeting_guid
     *
     * @return string
     */
    public function getMeetingGuid()
    {
        return $this->container['meeting_guid'];
    }

    /**
     * Sets meeting_guid
     *
     * @param string $meeting_guid meeting_guid
     *
     * @return $this
     */
    public function setMeetingGuid($meeting_guid)
    {
        $this->container['meeting_guid'] = $meeting_guid;

        return $this;
    }

    /**
     * Gets meeting_numeric_id
     *
     * @return string
     */
    public function getMeetingNumericId()
    {
        return $this->container['meeting_numeric_id'];
    }

    /**
     * Sets meeting_numeric_id
     *
     * @param string $meeting_numeric_id meeting_numeric_id
     *
     * @return $this
     */
    public function setMeetingNumericId($meeting_numeric_id)
    {
        $this->container['meeting_numeric_id'] = $meeting_numeric_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets leader_info
     *
     * @return \BlueJeansMeetingsRestApi\Model\MeetingHistoryLeaderInfo
     */
    public function getLeaderInfo()
    {
        return $this->container['leader_info'];
    }

    /**
     * Sets leader_info
     *
     * @param \BlueJeansMeetingsRestApi\Model\MeetingHistoryLeaderInfo $leader_info leader_info
     *
     * @return $this
     */
    public function setLeaderInfo($leader_info)
    {
        $this->container['leader_info'] = $leader_info;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets meeting_duration
     *
     * @return int
     */
    public function getMeetingDuration()
    {
        return $this->container['meeting_duration'];
    }

    /**
     * Sets meeting_duration
     *
     * @param int $meeting_duration meeting_duration
     *
     * @return $this
     */
    public function setMeetingDuration($meeting_duration)
    {
        $this->container['meeting_duration'] = $meeting_duration;

        return $this;
    }

    /**
     * Gets max_participant_count
     *
     * @return int
     */
    public function getMaxParticipantCount()
    {
        return $this->container['max_participant_count'];
    }

    /**
     * Sets max_participant_count
     *
     * @param int $max_participant_count max_participant_count
     *
     * @return $this
     */
    public function setMaxParticipantCount($max_participant_count)
    {
        $this->container['max_participant_count'] = $max_participant_count;

        return $this;
    }

    /**
     * Gets total_participant_minutes
     *
     * @return int
     */
    public function getTotalParticipantMinutes()
    {
        return $this->container['total_participant_minutes'];
    }

    /**
     * Sets total_participant_minutes
     *
     * @param int $total_participant_minutes total_participant_minutes
     *
     * @return $this
     */
    public function setTotalParticipantMinutes($total_participant_minutes)
    {
        $this->container['total_participant_minutes'] = $total_participant_minutes;

        return $this;
    }

    /**
     * Gets max_participant_minutes
     *
     * @return int
     */
    public function getMaxParticipantMinutes()
    {
        return $this->container['max_participant_minutes'];
    }

    /**
     * Sets max_participant_minutes
     *
     * @param int $max_participant_minutes max_participant_minutes
     *
     * @return $this
     */
    public function setMaxParticipantMinutes($max_participant_minutes)
    {
        $this->container['max_participant_minutes'] = $max_participant_minutes;

        return $this;
    }

    /**
     * Gets extra_participant_minutes
     *
     * @return int
     */
    public function getExtraParticipantMinutes()
    {
        return $this->container['extra_participant_minutes'];
    }

    /**
     * Sets extra_participant_minutes
     *
     * @param int $extra_participant_minutes extra_participant_minutes
     *
     * @return $this
     */
    public function setExtraParticipantMinutes($extra_participant_minutes)
    {
        $this->container['extra_participant_minutes'] = $extra_participant_minutes;

        return $this;
    }

    /**
     * Gets isdn_endpoints
     *
     * @return int
     */
    public function getIsdnEndpoints()
    {
        return $this->container['isdn_endpoints'];
    }

    /**
     * Sets isdn_endpoints
     *
     * @param int $isdn_endpoints isdn_endpoints
     *
     * @return $this
     */
    public function setIsdnEndpoints($isdn_endpoints)
    {
        $this->container['isdn_endpoints'] = $isdn_endpoints;

        return $this;
    }

    /**
     * Gets total_dialout_minutes
     *
     * @return int
     */
    public function getTotalDialoutMinutes()
    {
        return $this->container['total_dialout_minutes'];
    }

    /**
     * Sets total_dialout_minutes
     *
     * @param int $total_dialout_minutes total_dialout_minutes
     *
     * @return $this
     */
    public function setTotalDialoutMinutes($total_dialout_minutes)
    {
        $this->container['total_dialout_minutes'] = $total_dialout_minutes;

        return $this;
    }

    /**
     * Gets total_toll_free_minutes
     *
     * @return int
     */
    public function getTotalTollFreeMinutes()
    {
        return $this->container['total_toll_free_minutes'];
    }

    /**
     * Sets total_toll_free_minutes
     *
     * @param int $total_toll_free_minutes total_toll_free_minutes
     *
     * @return $this
     */
    public function setTotalTollFreeMinutes($total_toll_free_minutes)
    {
        $this->container['total_toll_free_minutes'] = $total_toll_free_minutes;

        return $this;
    }

    /**
     * Gets call_did_minutes
     *
     * @return int
     */
    public function getCallDidMinutes()
    {
        return $this->container['call_did_minutes'];
    }

    /**
     * Sets call_did_minutes
     *
     * @param int $call_did_minutes call_did_minutes
     *
     * @return $this
     */
    public function setCallDidMinutes($call_did_minutes)
    {
        $this->container['call_did_minutes'] = $call_did_minutes;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return int
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param int $start_time start_time
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return int
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param int $end_time end_time
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets meeting_status
     *
     * @return string
     */
    public function getMeetingStatus()
    {
        return $this->container['meeting_status'];
    }

    /**
     * Sets meeting_status
     *
     * @param string $meeting_status meeting_status
     *
     * @return $this
     */
    public function setMeetingStatus($meeting_status)
    {
        $allowedValues = $this->getMeetingStatusAllowableValues();
        if (!is_null($meeting_status) && !in_array($meeting_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'meeting_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['meeting_status'] = $meeting_status;

        return $this;
    }

    /**
     * Gets meeting_thumbnail
     *
     * @return string
     */
    public function getMeetingThumbnail()
    {
        return $this->container['meeting_thumbnail'];
    }

    /**
     * Sets meeting_thumbnail
     *
     * @param string $meeting_thumbnail meeting_thumbnail
     *
     * @return $this
     */
    public function setMeetingThumbnail($meeting_thumbnail)
    {
        $this->container['meeting_thumbnail'] = $meeting_thumbnail;

        return $this;
    }

    /**
     * Gets start_time_zone
     *
     * @return string
     */
    public function getStartTimeZone()
    {
        return $this->container['start_time_zone'];
    }

    /**
     * Sets start_time_zone
     *
     * @param string $start_time_zone start_time_zone
     *
     * @return $this
     */
    public function setStartTimeZone($start_time_zone)
    {
        $this->container['start_time_zone'] = $start_time_zone;

        return $this;
    }

    /**
     * Gets processing_status
     *
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     *
     * @param string $processing_status processing_status
     *
     * @return $this
     */
    public function setProcessingStatus($processing_status)
    {
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!is_null($processing_status) && !in_array($processing_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'processing_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets concurrent_calls
     *
     * @return string
     */
    public function getConcurrentCalls()
    {
        return $this->container['concurrent_calls'];
    }

    /**
     * Sets concurrent_calls
     *
     * @param string $concurrent_calls concurrent_calls
     *
     * @return $this
     */
    public function setConcurrentCalls($concurrent_calls)
    {
        $this->container['concurrent_calls'] = $concurrent_calls;

        return $this;
    }

    /**
     * Gets upload_status
     *
     * @return string
     */
    public function getUploadStatus()
    {
        return $this->container['upload_status'];
    }

    /**
     * Sets upload_status
     *
     * @param string $upload_status upload_status
     *
     * @return $this
     */
    public function setUploadStatus($upload_status)
    {
        $this->container['upload_status'] = $upload_status;

        return $this;
    }

    /**
     * Gets pstnonly
     *
     * @return bool
     */
    public function getPstnonly()
    {
        return $this->container['pstnonly'];
    }

    /**
     * Sets pstnonly
     *
     * @param bool $pstnonly pstnonly
     *
     * @return $this
     */
    public function setPstnonly($pstnonly)
    {
        $this->container['pstnonly'] = $pstnonly;

        return $this;
    }

    /**
     * Gets participant_list
     *
     * @return \BlueJeansMeetingsRestApi\Model\MeetingHistoryParticipantList[]
     */
    public function getParticipantList()
    {
        return $this->container['participant_list'];
    }

    /**
     * Sets participant_list
     *
     * @param \BlueJeansMeetingsRestApi\Model\MeetingHistoryParticipantList[] $participant_list participant_list
     *
     * @return $this
     */
    public function setParticipantList($participant_list)
    {
        $this->container['participant_list'] = $participant_list;

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



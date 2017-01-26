<?php
/**
 * Room
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authenticate button up in the header to store the token. Each BlueJeans API called after that will use the access token provided.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
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
 * Room Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Room implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Room';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'numeric_id' => 'string',
        'name' => 'string',
        'origin_pop_id' => 'int',
        'is_large_meeting' => 'bool',
        'show_video_animations' => 'bool',
        'background_image' => 'string',
        'is_moderator_less' => 'bool',
        'welcome_message' => 'string',
        'disallow_chat' => 'bool',
        'encryption_type' => 'string',
        'show_all_participants_in_ics' => 'bool',
        'participant_passcode' => 'string',
        'publish_meeting' => 'bool',
        'moderator_less' => 'bool',
        'video_best_fit' => 'bool',
        'mute_participants_on_entry' => 'bool',
        'enforce_meeting_encryption' => 'bool',
        'enforce_meeting_encryption_allow_pstn' => 'bool',
        'idle_timeout' => 'int',
        'default_layout' => 'string',
        'play_audio_alerts' => 'bool',
        'personal_meeting_id' => 'int',
        'moderator_passcode' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'numeric_id' => 'numericId',
        'name' => 'name',
        'origin_pop_id' => 'originPopId',
        'is_large_meeting' => 'isLargeMeeting',
        'show_video_animations' => 'showVideoAnimations',
        'background_image' => 'backgroundImage',
        'is_moderator_less' => 'isModeratorLess',
        'welcome_message' => 'welcomeMessage',
        'disallow_chat' => 'disallowChat',
        'encryption_type' => 'encryptionType',
        'show_all_participants_in_ics' => 'showAllParticipantsInIcs',
        'participant_passcode' => 'participantPasscode',
        'publish_meeting' => 'publishMeeting',
        'moderator_less' => 'moderatorLess',
        'video_best_fit' => 'videoBestFit',
        'mute_participants_on_entry' => 'muteParticipantsOnEntry',
        'enforce_meeting_encryption' => 'enforceMeetingEncryption',
        'enforce_meeting_encryption_allow_pstn' => 'enforceMeetingEncryptionAllowPSTN',
        'idle_timeout' => 'idleTimeout',
        'default_layout' => 'defaultLayout',
        'play_audio_alerts' => 'playAudioAlerts',
        'personal_meeting_id' => 'personalMeetingId',
        'moderator_passcode' => 'moderatorPasscode'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'numeric_id' => 'setNumericId',
        'name' => 'setName',
        'origin_pop_id' => 'setOriginPopId',
        'is_large_meeting' => 'setIsLargeMeeting',
        'show_video_animations' => 'setShowVideoAnimations',
        'background_image' => 'setBackgroundImage',
        'is_moderator_less' => 'setIsModeratorLess',
        'welcome_message' => 'setWelcomeMessage',
        'disallow_chat' => 'setDisallowChat',
        'encryption_type' => 'setEncryptionType',
        'show_all_participants_in_ics' => 'setShowAllParticipantsInIcs',
        'participant_passcode' => 'setParticipantPasscode',
        'publish_meeting' => 'setPublishMeeting',
        'moderator_less' => 'setModeratorLess',
        'video_best_fit' => 'setVideoBestFit',
        'mute_participants_on_entry' => 'setMuteParticipantsOnEntry',
        'enforce_meeting_encryption' => 'setEnforceMeetingEncryption',
        'enforce_meeting_encryption_allow_pstn' => 'setEnforceMeetingEncryptionAllowPstn',
        'idle_timeout' => 'setIdleTimeout',
        'default_layout' => 'setDefaultLayout',
        'play_audio_alerts' => 'setPlayAudioAlerts',
        'personal_meeting_id' => 'setPersonalMeetingId',
        'moderator_passcode' => 'setModeratorPasscode'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'numeric_id' => 'getNumericId',
        'name' => 'getName',
        'origin_pop_id' => 'getOriginPopId',
        'is_large_meeting' => 'getIsLargeMeeting',
        'show_video_animations' => 'getShowVideoAnimations',
        'background_image' => 'getBackgroundImage',
        'is_moderator_less' => 'getIsModeratorLess',
        'welcome_message' => 'getWelcomeMessage',
        'disallow_chat' => 'getDisallowChat',
        'encryption_type' => 'getEncryptionType',
        'show_all_participants_in_ics' => 'getShowAllParticipantsInIcs',
        'participant_passcode' => 'getParticipantPasscode',
        'publish_meeting' => 'getPublishMeeting',
        'moderator_less' => 'getModeratorLess',
        'video_best_fit' => 'getVideoBestFit',
        'mute_participants_on_entry' => 'getMuteParticipantsOnEntry',
        'enforce_meeting_encryption' => 'getEnforceMeetingEncryption',
        'enforce_meeting_encryption_allow_pstn' => 'getEnforceMeetingEncryptionAllowPstn',
        'idle_timeout' => 'getIdleTimeout',
        'default_layout' => 'getDefaultLayout',
        'play_audio_alerts' => 'getPlayAudioAlerts',
        'personal_meeting_id' => 'getPersonalMeetingId',
        'moderator_passcode' => 'getModeratorPasscode'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['numeric_id'] = isset($data['numeric_id']) ? $data['numeric_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['origin_pop_id'] = isset($data['origin_pop_id']) ? $data['origin_pop_id'] : null;
        $this->container['is_large_meeting'] = isset($data['is_large_meeting']) ? $data['is_large_meeting'] : null;
        $this->container['show_video_animations'] = isset($data['show_video_animations']) ? $data['show_video_animations'] : null;
        $this->container['background_image'] = isset($data['background_image']) ? $data['background_image'] : null;
        $this->container['is_moderator_less'] = isset($data['is_moderator_less']) ? $data['is_moderator_less'] : null;
        $this->container['welcome_message'] = isset($data['welcome_message']) ? $data['welcome_message'] : null;
        $this->container['disallow_chat'] = isset($data['disallow_chat']) ? $data['disallow_chat'] : null;
        $this->container['encryption_type'] = isset($data['encryption_type']) ? $data['encryption_type'] : null;
        $this->container['show_all_participants_in_ics'] = isset($data['show_all_participants_in_ics']) ? $data['show_all_participants_in_ics'] : null;
        $this->container['participant_passcode'] = isset($data['participant_passcode']) ? $data['participant_passcode'] : null;
        $this->container['publish_meeting'] = isset($data['publish_meeting']) ? $data['publish_meeting'] : null;
        $this->container['moderator_less'] = isset($data['moderator_less']) ? $data['moderator_less'] : null;
        $this->container['video_best_fit'] = isset($data['video_best_fit']) ? $data['video_best_fit'] : null;
        $this->container['mute_participants_on_entry'] = isset($data['mute_participants_on_entry']) ? $data['mute_participants_on_entry'] : null;
        $this->container['enforce_meeting_encryption'] = isset($data['enforce_meeting_encryption']) ? $data['enforce_meeting_encryption'] : null;
        $this->container['enforce_meeting_encryption_allow_pstn'] = isset($data['enforce_meeting_encryption_allow_pstn']) ? $data['enforce_meeting_encryption_allow_pstn'] : null;
        $this->container['idle_timeout'] = isset($data['idle_timeout']) ? $data['idle_timeout'] : null;
        $this->container['default_layout'] = isset($data['default_layout']) ? $data['default_layout'] : null;
        $this->container['play_audio_alerts'] = isset($data['play_audio_alerts']) ? $data['play_audio_alerts'] : null;
        $this->container['personal_meeting_id'] = isset($data['personal_meeting_id']) ? $data['personal_meeting_id'] : null;
        $this->container['moderator_passcode'] = isset($data['moderator_passcode']) ? $data['moderator_passcode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Unique identifier for room.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets numeric_id
     * @return string
     */
    public function getNumericId()
    {
        return $this->container['numeric_id'];
    }

    /**
     * Sets numeric_id
     * @param string $numeric_id Unique identifier for room.
     * @return $this
     */
    public function setNumericId($numeric_id)
    {
        $this->container['numeric_id'] = $numeric_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the room.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets origin_pop_id
     * @return int
     */
    public function getOriginPopId()
    {
        return $this->container['origin_pop_id'];
    }

    /**
     * Sets origin_pop_id
     * @param int $origin_pop_id
     * @return $this
     */
    public function setOriginPopId($origin_pop_id)
    {
        $this->container['origin_pop_id'] = $origin_pop_id;

        return $this;
    }

    /**
     * Gets is_large_meeting
     * @return bool
     */
    public function getIsLargeMeeting()
    {
        return $this->container['is_large_meeting'];
    }

    /**
     * Sets is_large_meeting
     * @param bool $is_large_meeting
     * @return $this
     */
    public function setIsLargeMeeting($is_large_meeting)
    {
        $this->container['is_large_meeting'] = $is_large_meeting;

        return $this;
    }

    /**
     * Gets show_video_animations
     * @return bool
     */
    public function getShowVideoAnimations()
    {
        return $this->container['show_video_animations'];
    }

    /**
     * Sets show_video_animations
     * @param bool $show_video_animations
     * @return $this
     */
    public function setShowVideoAnimations($show_video_animations)
    {
        $this->container['show_video_animations'] = $show_video_animations;

        return $this;
    }

    /**
     * Gets background_image
     * @return string
     */
    public function getBackgroundImage()
    {
        return $this->container['background_image'];
    }

    /**
     * Sets background_image
     * @param string $background_image
     * @return $this
     */
    public function setBackgroundImage($background_image)
    {
        $this->container['background_image'] = $background_image;

        return $this;
    }

    /**
     * Gets is_moderator_less
     * @return bool
     */
    public function getIsModeratorLess()
    {
        return $this->container['is_moderator_less'];
    }

    /**
     * Sets is_moderator_less
     * @param bool $is_moderator_less
     * @return $this
     */
    public function setIsModeratorLess($is_moderator_less)
    {
        $this->container['is_moderator_less'] = $is_moderator_less;

        return $this;
    }

    /**
     * Gets welcome_message
     * @return string
     */
    public function getWelcomeMessage()
    {
        return $this->container['welcome_message'];
    }

    /**
     * Sets welcome_message
     * @param string $welcome_message
     * @return $this
     */
    public function setWelcomeMessage($welcome_message)
    {
        $this->container['welcome_message'] = $welcome_message;

        return $this;
    }

    /**
     * Gets disallow_chat
     * @return bool
     */
    public function getDisallowChat()
    {
        return $this->container['disallow_chat'];
    }

    /**
     * Sets disallow_chat
     * @param bool $disallow_chat
     * @return $this
     */
    public function setDisallowChat($disallow_chat)
    {
        $this->container['disallow_chat'] = $disallow_chat;

        return $this;
    }

    /**
     * Gets encryption_type
     * @return string
     */
    public function getEncryptionType()
    {
        return $this->container['encryption_type'];
    }

    /**
     * Sets encryption_type
     * @param string $encryption_type
     * @return $this
     */
    public function setEncryptionType($encryption_type)
    {
        $this->container['encryption_type'] = $encryption_type;

        return $this;
    }

    /**
     * Gets show_all_participants_in_ics
     * @return bool
     */
    public function getShowAllParticipantsInIcs()
    {
        return $this->container['show_all_participants_in_ics'];
    }

    /**
     * Sets show_all_participants_in_ics
     * @param bool $show_all_participants_in_ics
     * @return $this
     */
    public function setShowAllParticipantsInIcs($show_all_participants_in_ics)
    {
        $this->container['show_all_participants_in_ics'] = $show_all_participants_in_ics;

        return $this;
    }

    /**
     * Gets participant_passcode
     * @return string
     */
    public function getParticipantPasscode()
    {
        return $this->container['participant_passcode'];
    }

    /**
     * Sets participant_passcode
     * @param string $participant_passcode
     * @return $this
     */
    public function setParticipantPasscode($participant_passcode)
    {
        $this->container['participant_passcode'] = $participant_passcode;

        return $this;
    }

    /**
     * Gets publish_meeting
     * @return bool
     */
    public function getPublishMeeting()
    {
        return $this->container['publish_meeting'];
    }

    /**
     * Sets publish_meeting
     * @param bool $publish_meeting
     * @return $this
     */
    public function setPublishMeeting($publish_meeting)
    {
        $this->container['publish_meeting'] = $publish_meeting;

        return $this;
    }

    /**
     * Gets moderator_less
     * @return bool
     */
    public function getModeratorLess()
    {
        return $this->container['moderator_less'];
    }

    /**
     * Sets moderator_less
     * @param bool $moderator_less
     * @return $this
     */
    public function setModeratorLess($moderator_less)
    {
        $this->container['moderator_less'] = $moderator_less;

        return $this;
    }

    /**
     * Gets video_best_fit
     * @return bool
     */
    public function getVideoBestFit()
    {
        return $this->container['video_best_fit'];
    }

    /**
     * Sets video_best_fit
     * @param bool $video_best_fit
     * @return $this
     */
    public function setVideoBestFit($video_best_fit)
    {
        $this->container['video_best_fit'] = $video_best_fit;

        return $this;
    }

    /**
     * Gets mute_participants_on_entry
     * @return bool
     */
    public function getMuteParticipantsOnEntry()
    {
        return $this->container['mute_participants_on_entry'];
    }

    /**
     * Sets mute_participants_on_entry
     * @param bool $mute_participants_on_entry
     * @return $this
     */
    public function setMuteParticipantsOnEntry($mute_participants_on_entry)
    {
        $this->container['mute_participants_on_entry'] = $mute_participants_on_entry;

        return $this;
    }

    /**
     * Gets enforce_meeting_encryption
     * @return bool
     */
    public function getEnforceMeetingEncryption()
    {
        return $this->container['enforce_meeting_encryption'];
    }

    /**
     * Sets enforce_meeting_encryption
     * @param bool $enforce_meeting_encryption
     * @return $this
     */
    public function setEnforceMeetingEncryption($enforce_meeting_encryption)
    {
        $this->container['enforce_meeting_encryption'] = $enforce_meeting_encryption;

        return $this;
    }

    /**
     * Gets enforce_meeting_encryption_allow_pstn
     * @return bool
     */
    public function getEnforceMeetingEncryptionAllowPstn()
    {
        return $this->container['enforce_meeting_encryption_allow_pstn'];
    }

    /**
     * Sets enforce_meeting_encryption_allow_pstn
     * @param bool $enforce_meeting_encryption_allow_pstn
     * @return $this
     */
    public function setEnforceMeetingEncryptionAllowPstn($enforce_meeting_encryption_allow_pstn)
    {
        $this->container['enforce_meeting_encryption_allow_pstn'] = $enforce_meeting_encryption_allow_pstn;

        return $this;
    }

    /**
     * Gets idle_timeout
     * @return int
     */
    public function getIdleTimeout()
    {
        return $this->container['idle_timeout'];
    }

    /**
     * Sets idle_timeout
     * @param int $idle_timeout
     * @return $this
     */
    public function setIdleTimeout($idle_timeout)
    {
        $this->container['idle_timeout'] = $idle_timeout;

        return $this;
    }

    /**
     * Gets default_layout
     * @return string
     */
    public function getDefaultLayout()
    {
        return $this->container['default_layout'];
    }

    /**
     * Sets default_layout
     * @param string $default_layout
     * @return $this
     */
    public function setDefaultLayout($default_layout)
    {
        $this->container['default_layout'] = $default_layout;

        return $this;
    }

    /**
     * Gets play_audio_alerts
     * @return bool
     */
    public function getPlayAudioAlerts()
    {
        return $this->container['play_audio_alerts'];
    }

    /**
     * Sets play_audio_alerts
     * @param bool $play_audio_alerts
     * @return $this
     */
    public function setPlayAudioAlerts($play_audio_alerts)
    {
        $this->container['play_audio_alerts'] = $play_audio_alerts;

        return $this;
    }

    /**
     * Gets personal_meeting_id
     * @return int
     */
    public function getPersonalMeetingId()
    {
        return $this->container['personal_meeting_id'];
    }

    /**
     * Sets personal_meeting_id
     * @param int $personal_meeting_id
     * @return $this
     */
    public function setPersonalMeetingId($personal_meeting_id)
    {
        $this->container['personal_meeting_id'] = $personal_meeting_id;

        return $this;
    }

    /**
     * Gets moderator_passcode
     * @return string
     */
    public function getModeratorPasscode()
    {
        return $this->container['moderator_passcode'];
    }

    /**
     * Sets moderator_passcode
     * @param string $moderator_passcode
     * @return $this
     */
    public function setModeratorPasscode($moderator_passcode)
    {
        $this->container['moderator_passcode'] = $moderator_passcode;

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



# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.0
    Contact: brandon@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class AnalyticsUsageUsage(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """


    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'endpoint_minutes': 'int',
        'num_endpoints': 'int',
        'num_meetings': 'int',
        'date': 'int'
    }

    attribute_map = {
        'endpoint_minutes': 'endpointMinutes',
        'num_endpoints': 'numEndpoints',
        'num_meetings': 'numMeetings',
        'date': 'Date'
    }

    def __init__(self, endpoint_minutes=None, num_endpoints=None, num_meetings=None, date=None):
        """
        AnalyticsUsageUsage - a model defined in Swagger
        """

        self._endpoint_minutes = None
        self._num_endpoints = None
        self._num_meetings = None
        self._date = None

        if endpoint_minutes is not None:
          self.endpoint_minutes = endpoint_minutes
        if num_endpoints is not None:
          self.num_endpoints = num_endpoints
        if num_meetings is not None:
          self.num_meetings = num_meetings
        if date is not None:
          self.date = date

    @property
    def endpoint_minutes(self):
        """
        Gets the endpoint_minutes of this AnalyticsUsageUsage.

        :return: The endpoint_minutes of this AnalyticsUsageUsage.
        :rtype: int
        """
        return self._endpoint_minutes

    @endpoint_minutes.setter
    def endpoint_minutes(self, endpoint_minutes):
        """
        Sets the endpoint_minutes of this AnalyticsUsageUsage.

        :param endpoint_minutes: The endpoint_minutes of this AnalyticsUsageUsage.
        :type: int
        """

        self._endpoint_minutes = endpoint_minutes

    @property
    def num_endpoints(self):
        """
        Gets the num_endpoints of this AnalyticsUsageUsage.

        :return: The num_endpoints of this AnalyticsUsageUsage.
        :rtype: int
        """
        return self._num_endpoints

    @num_endpoints.setter
    def num_endpoints(self, num_endpoints):
        """
        Sets the num_endpoints of this AnalyticsUsageUsage.

        :param num_endpoints: The num_endpoints of this AnalyticsUsageUsage.
        :type: int
        """

        self._num_endpoints = num_endpoints

    @property
    def num_meetings(self):
        """
        Gets the num_meetings of this AnalyticsUsageUsage.

        :return: The num_meetings of this AnalyticsUsageUsage.
        :rtype: int
        """
        return self._num_meetings

    @num_meetings.setter
    def num_meetings(self, num_meetings):
        """
        Sets the num_meetings of this AnalyticsUsageUsage.

        :param num_meetings: The num_meetings of this AnalyticsUsageUsage.
        :type: int
        """

        self._num_meetings = num_meetings

    @property
    def date(self):
        """
        Gets the date of this AnalyticsUsageUsage.

        :return: The date of this AnalyticsUsageUsage.
        :rtype: int
        """
        return self._date

    @date.setter
    def date(self, date):
        """
        Sets the date of this AnalyticsUsageUsage.

        :param date: The date of this AnalyticsUsageUsage.
        :type: int
        """

        self._date = date

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        if not isinstance(other, AnalyticsUsageUsage):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
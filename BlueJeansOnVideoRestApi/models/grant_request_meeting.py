# coding: utf-8

"""
    BlueJeans onVideo REST API

    _Video That Works Where You Do._  This site provides developers access to API's from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data as well retrieve current state information.  With these API's  you should be able to quickly integrate **BlueJeans** video into your applications.     # Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ## Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – After creating a developer application, users witll authenticate via a BlueJeans page, and receive an authorization code. Submit authorization with other tokens and receive an access token. Known as three-legged OAuth. ## Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. # Getting Started Before you start using the API's on this site, you must first have a BlueJeans account.  With your BlueJean credentials, use one of the Authentication methods to obtain an access token. - Click on the Authorize button at the top of page - Enter your access token in the field marked \"api_key\" Now the web site will automatically include your access token on all API calls you make. 

    OpenAPI spec version: 1.0.0
    Contact: brandon@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class GrantRequestMeeting(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, grant_type='meeting_passcode', meeting_numeric_id=None, meeting_passcode=None):
        """
        GrantRequestMeeting - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'grant_type': 'str',
            'meeting_numeric_id': 'str',
            'meeting_passcode': 'str'
        }

        self.attribute_map = {
            'grant_type': 'grant_type',
            'meeting_numeric_id': 'meetingNumericId',
            'meeting_passcode': 'meetingPasscode'
        }

        self._grant_type = grant_type
        self._meeting_numeric_id = meeting_numeric_id
        self._meeting_passcode = meeting_passcode

    @property
    def grant_type(self):
        """
        Gets the grant_type of this GrantRequestMeeting.
        The type of access token you are requesting.

        :return: The grant_type of this GrantRequestMeeting.
        :rtype: str
        """
        return self._grant_type

    @grant_type.setter
    def grant_type(self, grant_type):
        """
        Sets the grant_type of this GrantRequestMeeting.
        The type of access token you are requesting.

        :param grant_type: The grant_type of this GrantRequestMeeting.
        :type: str
        """
        if grant_type is None:
            raise ValueError("Invalid value for `grant_type`, must not be `None`")

        self._grant_type = grant_type

    @property
    def meeting_numeric_id(self):
        """
        Gets the meeting_numeric_id of this GrantRequestMeeting.
        Meeting ID

        :return: The meeting_numeric_id of this GrantRequestMeeting.
        :rtype: str
        """
        return self._meeting_numeric_id

    @meeting_numeric_id.setter
    def meeting_numeric_id(self, meeting_numeric_id):
        """
        Sets the meeting_numeric_id of this GrantRequestMeeting.
        Meeting ID

        :param meeting_numeric_id: The meeting_numeric_id of this GrantRequestMeeting.
        :type: str
        """
        if meeting_numeric_id is None:
            raise ValueError("Invalid value for `meeting_numeric_id`, must not be `None`")

        self._meeting_numeric_id = meeting_numeric_id

    @property
    def meeting_passcode(self):
        """
        Gets the meeting_passcode of this GrantRequestMeeting.
        Pin

        :return: The meeting_passcode of this GrantRequestMeeting.
        :rtype: str
        """
        return self._meeting_passcode

    @meeting_passcode.setter
    def meeting_passcode(self, meeting_passcode):
        """
        Sets the meeting_passcode of this GrantRequestMeeting.
        Pin

        :param meeting_passcode: The meeting_passcode of this GrantRequestMeeting.
        :type: str
        """
        if meeting_passcode is None:
            raise ValueError("Invalid value for `meeting_passcode`, must not be `None`")

        self._meeting_passcode = meeting_passcode

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
        if not isinstance(other, GrantRequestMeeting):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

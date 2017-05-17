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


class GrantRequestRefresh(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, grant_type='refresh_token', client_id=None, client_secret=None, refresh_token=None):
        """
        GrantRequestRefresh - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'grant_type': 'str',
            'client_id': 'str',
            'client_secret': 'str',
            'refresh_token': 'str'
        }

        self.attribute_map = {
            'grant_type': 'grant_type',
            'client_id': 'client_id',
            'client_secret': 'client_secret',
            'refresh_token': 'refresh_token'
        }

        self._grant_type = grant_type
        self._client_id = client_id
        self._client_secret = client_secret
        self._refresh_token = refresh_token

    @property
    def grant_type(self):
        """
        Gets the grant_type of this GrantRequestRefresh.
        The type of access token you are requesting.

        :return: The grant_type of this GrantRequestRefresh.
        :rtype: str
        """
        return self._grant_type

    @grant_type.setter
    def grant_type(self, grant_type):
        """
        Sets the grant_type of this GrantRequestRefresh.
        The type of access token you are requesting.

        :param grant_type: The grant_type of this GrantRequestRefresh.
        :type: str
        """
        if grant_type is None:
            raise ValueError("Invalid value for `grant_type`, must not be `None`")

        self._grant_type = grant_type

    @property
    def client_id(self):
        """
        Gets the client_id of this GrantRequestRefresh.
        The client ID will be generated on creation of the application. Normally, a 32 character hexidecimal numeric string.

        :return: The client_id of this GrantRequestRefresh.
        :rtype: str
        """
        return self._client_id

    @client_id.setter
    def client_id(self, client_id):
        """
        Sets the client_id of this GrantRequestRefresh.
        The client ID will be generated on creation of the application. Normally, a 32 character hexidecimal numeric string.

        :param client_id: The client_id of this GrantRequestRefresh.
        :type: str
        """
        if client_id is None:
            raise ValueError("Invalid value for `client_id`, must not be `None`")

        self._client_id = client_id

    @property
    def client_secret(self):
        """
        Gets the client_secret of this GrantRequestRefresh.
        The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate.

        :return: The client_secret of this GrantRequestRefresh.
        :rtype: str
        """
        return self._client_secret

    @client_secret.setter
    def client_secret(self, client_secret):
        """
        Sets the client_secret of this GrantRequestRefresh.
        The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate.

        :param client_secret: The client_secret of this GrantRequestRefresh.
        :type: str
        """
        if client_secret is None:
            raise ValueError("Invalid value for `client_secret`, must not be `None`")

        self._client_secret = client_secret

    @property
    def refresh_token(self):
        """
        Gets the refresh_token of this GrantRequestRefresh.
        Refresh token obtained after token authorization.

        :return: The refresh_token of this GrantRequestRefresh.
        :rtype: str
        """
        return self._refresh_token

    @refresh_token.setter
    def refresh_token(self, refresh_token):
        """
        Sets the refresh_token of this GrantRequestRefresh.
        Refresh token obtained after token authorization.

        :param refresh_token: The refresh_token of this GrantRequestRefresh.
        :type: str
        """
        if refresh_token is None:
            raise ValueError("Invalid value for `refresh_token`, must not be `None`")

        self._refresh_token = refresh_token

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
        if not isinstance(other, GrantRequestRefresh):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

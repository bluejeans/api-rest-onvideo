/**
 * BlueJeans onVideo REST API
 * _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authenticate button up in the header to store the token. Each BlueJeans API called after that will use the access token provided. 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD.
    define(['expect.js', '../../src/index'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    factory(require('expect.js'), require('../../src/index'));
  } else {
    // Browser globals (root is window)
    factory(root.expect, root.BlueJeansOnVideoRestApi);
  }
}(this, function(expect, BlueJeansOnVideoRestApi) {
  'use strict';

  var instance;

  beforeEach(function() {
    instance = new BlueJeansOnVideoRestApi.AnalyticsTopUsersUsage();
  });

  var getProperty = function(object, getter, property) {
    // Use getter method if present; otherwise, get the property directly.
    if (typeof object[getter] === 'function')
      return object[getter]();
    else
      return object[property];
  }

  var setProperty = function(object, setter, property, value) {
    // Use setter method if present; otherwise, set the property directly.
    if (typeof object[setter] === 'function')
      object[setter](value);
    else
      object[property] = value;
  }

  describe('AnalyticsTopUsersUsage', function() {
    it('should create an instance of AnalyticsTopUsersUsage', function() {
      // uncomment below and update the code to test AnalyticsTopUsersUsage
      //var instane = new BlueJeansOnVideoRestApi.AnalyticsTopUsersUsage();
      //expect(instance).to.be.a(BlueJeansOnVideoRestApi.AnalyticsTopUsersUsage);
    });

    it('should have the property lastMeetingTime (base name: "lastMeetingTime")', function() {
      // uncomment below and update the code to test the property lastMeetingTime
      //var instane = new BlueJeansOnVideoRestApi.AnalyticsTopUsersUsage();
      //expect(instance).to.be();
    });

    it('should have the property participantMinutes (base name: "participantMinutes")', function() {
      // uncomment below and update the code to test the property participantMinutes
      //var instane = new BlueJeansOnVideoRestApi.AnalyticsTopUsersUsage();
      //expect(instance).to.be();
    });

    it('should have the property lastName (base name: "last_name")', function() {
      // uncomment below and update the code to test the property lastName
      //var instane = new BlueJeansOnVideoRestApi.AnalyticsTopUsersUsage();
      //expect(instance).to.be();
    });

    it('should have the property userName (base name: "userName")', function() {
      // uncomment below and update the code to test the property userName
      //var instane = new BlueJeansOnVideoRestApi.AnalyticsTopUsersUsage();
      //expect(instance).to.be();
    });

    it('should have the property userId (base name: "userId")', function() {
      // uncomment below and update the code to test the property userId
      //var instane = new BlueJeansOnVideoRestApi.AnalyticsTopUsersUsage();
      //expect(instance).to.be();
    });

    it('should have the property firstName (base name: "first_name")', function() {
      // uncomment below and update the code to test the property firstName
      //var instane = new BlueJeansOnVideoRestApi.AnalyticsTopUsersUsage();
      //expect(instance).to.be();
    });

  });

}));

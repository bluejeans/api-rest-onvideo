/**
 * BlueJeans onVideo REST API
 * _Video That Works Where You Do._  This site provides developers access to API's from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data as well retrieve current state information.  With these API's  you should be able to quickly integrate **BlueJeans** video into your applications.     # Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ## Grant Types Bluejeans provides 3 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to the user. * Authorization Code Grant – Authenticate via a BlueJeans page, and receive an authorization code. Submit authorization with other tokens and receive an access code. (\"three-legged OAuth\") * Password Credentials Grant – Authenticate with a Username and password and receives an access code. (\"two-legged OAuth\"); * Client Credentials Grant – Similar to Password Grant (\"two-legged OAuth\").  ## Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – scope of APIs is limited to individual meetings. * User-level – scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users.  All endpoints in this document that require **Enterprise Admin** access will be marked as such. # Getting Started Before you start using the API's on this site, you must first have a BlueJeans account.  With your BlueJean credentials, use on of the Authentication methods to obtain an access token. - Click on the Authorize button at the top of page - Enter your access token in the field marked \"api_key\" Now the web site will automatically include your access token on all API calls you make. 
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
    instance = new BlueJeansOnVideoRestApi.MeetingIndigo();
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

  describe('MeetingIndigo', function() {
    it('should create an instance of MeetingIndigo', function() {
      // uncomment below and update the code to test MeetingIndigo
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be.a(BlueJeansOnVideoRestApi.MeetingIndigo);
    });

    it('should have the property meetingId (base name: "meetingId")', function() {
      // uncomment below and update the code to test the property meetingId
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property meetingUUID (base name: "meetingUUID")', function() {
      // uncomment below and update the code to test the property meetingUUID
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property userName (base name: "userName")', function() {
      // uncomment below and update the code to test the property userName
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property email (base name: "email")', function() {
      // uncomment below and update the code to test the property email
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property encryptionType (base name: "encryptionType")', function() {
      // uncomment below and update the code to test the property encryptionType
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property title (base name: "title")', function() {
      // uncomment below and update the code to test the property title
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property userFullName (base name: "userFullName")', function() {
      // uncomment below and update the code to test the property userFullName
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property phoneNumber (base name: "phoneNumber")', function() {
      // uncomment below and update the code to test the property phoneNumber
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property userFeatures (base name: "userFeatures")', function() {
      // uncomment below and update the code to test the property userFeatures
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property scheduledFrom (base name: "scheduledFrom")', function() {
      // uncomment below and update the code to test the property scheduledFrom
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property inviteeCount (base name: "inviteeCount")', function() {
      // uncomment below and update the code to test the property inviteeCount
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property personal (base name: "personal")', function() {
      // uncomment below and update the code to test the property personal
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property muteOnEntry (base name: "muteOnEntry")', function() {
      // uncomment below and update the code to test the property muteOnEntry
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property autoRecord (base name: "autoRecord")', function() {
      // uncomment below and update the code to test the property autoRecord
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property enterpriseName (base name: "enterpriseName")', function() {
      // uncomment below and update the code to test the property enterpriseName
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property moderatorLess (base name: "moderatorLess")', function() {
      // uncomment below and update the code to test the property moderatorLess
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property startTime (base name: "startTime")', function() {
      // uncomment below and update the code to test the property startTime
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property endTime (base name: "endTime")', function() {
      // uncomment below and update the code to test the property endTime
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property totalCallSeconds (base name: "totalCallSeconds")', function() {
      // uncomment below and update the code to test the property totalCallSeconds
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property createTime (base name: "createTime")', function() {
      // uncomment below and update the code to test the property createTime
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property endpointsCount (base name: "endpointsCount")', function() {
      // uncomment below and update the code to test the property endpointsCount
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property concurrentEndpoints (base name: "concurrentEndpoints")', function() {
      // uncomment below and update the code to test the property concurrentEndpoints
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property liveVisibleEndpointsCount (base name: "liveVisibleEndpointsCount")', function() {
      // uncomment below and update the code to test the property liveVisibleEndpointsCount
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property qualarooRating (base name: "qualarooRating")', function() {
      // uncomment below and update the code to test the property qualarooRating
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property qualarooCount (base name: "qualarooCount")', function() {
      // uncomment below and update the code to test the property qualarooCount
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property meetingRecording (base name: "meetingRecording")', function() {
      // uncomment below and update the code to test the property meetingRecording
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property videoShare (base name: "videoShare")', function() {
      // uncomment below and update the code to test the property videoShare
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property contentShare (base name: "contentShare")', function() {
      // uncomment below and update the code to test the property contentShare
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property liveRecording (base name: "liveRecording")', function() {
      // uncomment below and update the code to test the property liveRecording
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property liveVideoShare (base name: "liveVideoShare")', function() {
      // uncomment below and update the code to test the property liveVideoShare
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property liveContentShare (base name: "liveContentShare")', function() {
      // uncomment below and update the code to test the property liveContentShare
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property largeMeeting (base name: "largeMeeting")', function() {
      // uncomment below and update the code to test the property largeMeeting
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property roiDistance (base name: "roiDistance")', function() {
      // uncomment below and update the code to test the property roiDistance
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property mpls (base name: "mpls")', function() {
      // uncomment below and update the code to test the property mpls
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property id (base name: "id")', function() {
      // uncomment below and update the code to test the property id
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

    it('should have the property endpoints (base name: "endpoints")', function() {
      // uncomment below and update the code to test the property endpoints
      //var instane = new BlueJeansOnVideoRestApi.MeetingIndigo();
      //expect(instance).to.be();
    });

  });

}));
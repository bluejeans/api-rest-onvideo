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

(function(factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(['ApiClient', 'model/AnalyticsEndpointDistribution', 'model/AnalyticsEndpointDistributionDistribution', 'model/AnalyticsFeedbackComments', 'model/AnalyticsFeedbackCommentsComments', 'model/AnalyticsFeedbackScores', 'model/AnalyticsRoiData', 'model/AnalyticsRoiDataRoiRanges', 'model/AnalyticsTopUsers', 'model/AnalyticsTopUsersUsage', 'model/AnalyticsUsage', 'model/AnalyticsUsageUsage', 'model/Content', 'model/ContentContentProperties', 'model/ContentContentPropertiesLevels', 'model/Enterprise', 'model/Error', 'model/Grant', 'model/Meeting', 'model/Partition', 'model/Payload', 'model/Payload1', 'model/Payload2', 'model/Recording', 'model/RecordingRecordingChapters', 'model/RecordingRecordingSessions', 'model/RecordingStartedBy', 'model/RecordingSummary', 'model/Room', 'model/Scope', 'model/User', 'api/AnalyticsApi', 'api/AuthenticationApi', 'api/CommandCenterApi', 'api/EnterpriseApi', 'api/HistoryApi', 'api/MeetingApi', 'api/RecordingApi', 'api/UserApi'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('./ApiClient'), require('./model/AnalyticsEndpointDistribution'), require('./model/AnalyticsEndpointDistributionDistribution'), require('./model/AnalyticsFeedbackComments'), require('./model/AnalyticsFeedbackCommentsComments'), require('./model/AnalyticsFeedbackScores'), require('./model/AnalyticsRoiData'), require('./model/AnalyticsRoiDataRoiRanges'), require('./model/AnalyticsTopUsers'), require('./model/AnalyticsTopUsersUsage'), require('./model/AnalyticsUsage'), require('./model/AnalyticsUsageUsage'), require('./model/Content'), require('./model/ContentContentProperties'), require('./model/ContentContentPropertiesLevels'), require('./model/Enterprise'), require('./model/Error'), require('./model/Grant'), require('./model/Meeting'), require('./model/Partition'), require('./model/Payload'), require('./model/Payload1'), require('./model/Payload2'), require('./model/Recording'), require('./model/RecordingRecordingChapters'), require('./model/RecordingRecordingSessions'), require('./model/RecordingStartedBy'), require('./model/RecordingSummary'), require('./model/Room'), require('./model/Scope'), require('./model/User'), require('./api/AnalyticsApi'), require('./api/AuthenticationApi'), require('./api/CommandCenterApi'), require('./api/EnterpriseApi'), require('./api/HistoryApi'), require('./api/MeetingApi'), require('./api/RecordingApi'), require('./api/UserApi'));
  }
}(function(ApiClient, AnalyticsEndpointDistribution, AnalyticsEndpointDistributionDistribution, AnalyticsFeedbackComments, AnalyticsFeedbackCommentsComments, AnalyticsFeedbackScores, AnalyticsRoiData, AnalyticsRoiDataRoiRanges, AnalyticsTopUsers, AnalyticsTopUsersUsage, AnalyticsUsage, AnalyticsUsageUsage, Content, ContentContentProperties, ContentContentPropertiesLevels, Enterprise, Error, Grant, Meeting, Partition, Payload, Payload1, Payload2, Recording, RecordingRecordingChapters, RecordingRecordingSessions, RecordingStartedBy, RecordingSummary, Room, Scope, User, AnalyticsApi, AuthenticationApi, CommandCenterApi, EnterpriseApi, HistoryApi, MeetingApi, RecordingApi, UserApi) {
  'use strict';

  /**
   * _Video_That_Works_Where_You_Do_from_the_worlds_leader_in_cloud_video_communication___AuthenticationEach_API_request_that_is_sent_to_BlueJeans_requires_an_access_token_which_is_obtained_through_the_BlueJeans_Authentication_API__There_are_several_methods__grant_types_for_obtaining_an_access_token_which_follow_the_OAuth2_0_specification__Grant_Types_Authorization_Code_Grant__This_grant_type_is_used_in_an_authentication_flow_commonly_referred_to_as_three_legged_OAuth__The_user_authenticates_via_a_BlueJeans_page_which_provides_an_authorization_code__This_code_along_with_a_few_other_elements_can_be_used_to_obtain_an_access_code__Password_Credentials_Grant__This_grant_type_is_used_in_a_two_legged_OAuth_flow__Username_and_password_are_sent_to_retrieve_an_access_code__Client_Credentials_Grant__This_grant_type_is_used_in_a_two_legged_OAuth_flow__Access__PermissionsThe_access_level_that_is_associated_with_each_access_token_is_referred_to_as_the_scope__There_are_three_basic_levels_of_access_that_BlueJeans_allows_which_affect_the_level_of_scope_Three_access_levels_exist_within_the_Blue_Jeans_service_today__Meeting_level__Authentication_takes_place_using_a_meeting_ID_and_passcode_and_the_scope_is_limited_to_APIs_that_relate_to_the_individual_meeting__User_level__Authentication_either_takes_place_via_three_legged_OAuth_or_else_a_direct_authorization_token_request_containing_a_username_or_password__Access_level_depends_on_the_requested_scope_permissions__App_level__An_application_is_provisioned_either_by_BlueJeans_personnel_or_within_the_BlueJeans_Enterprise_Admin_interface__When_provisioning_an_app_a_client_key_and_secret_are_provided_which_is_then_used_to_obtain_an_access_token_via_the_BlueJeans_Authentication_API__The_scope_that_is_associated_with_the_token_will_provide_access_to_an_entire_enterprise_and_all_of_its_users_All_endpoints_in_this_document_that_require_Enterprise_Admin_access_will_be_marked_as_such__TestingIn_order_to_make_effective_use_of_this_page_you_will_first_use_one_of_the_authentication_methods_to_obtain_an_access_token__Once_the_token_is_given_use_the_Authenticate_button_up_in_the_header_to_store_the_token__Each_BlueJeans_API_called_after_that_will_use_the_access_token_provided_.<br>
   * The <code>index</code> module provides access to constructors for all the classes which comprise the public API.
   * <p>
   * An AMD (recommended!) or CommonJS application will generally do something equivalent to the following:
   * <pre>
   * var BlueJeansOnVideoRestApi = require('index'); // See note below*.
   * var xxxSvc = new BlueJeansOnVideoRestApi.XxxApi(); // Allocate the API class we're going to use.
   * var yyyModel = new BlueJeansOnVideoRestApi.Yyy(); // Construct a model instance.
   * yyyModel.someProperty = 'someValue';
   * ...
   * var zzz = xxxSvc.doSomething(yyyModel); // Invoke the service.
   * ...
   * </pre>
   * <em>*NOTE: For a top-level AMD script, use require(['index'], function(){...})
   * and put the application logic within the callback function.</em>
   * </p>
   * <p>
   * A non-AMD browser application (discouraged) might do something like this:
   * <pre>
   * var xxxSvc = new BlueJeansOnVideoRestApi.XxxApi(); // Allocate the API class we're going to use.
   * var yyy = new BlueJeansOnVideoRestApi.Yyy(); // Construct a model instance.
   * yyyModel.someProperty = 'someValue';
   * ...
   * var zzz = xxxSvc.doSomething(yyyModel); // Invoke the service.
   * ...
   * </pre>
   * </p>
   * @module index
   * @version 1.0.0
   */
  var exports = {
    /**
     * The ApiClient constructor.
     * @property {module:ApiClient}
     */
    ApiClient: ApiClient,
    /**
     * The AnalyticsEndpointDistribution model constructor.
     * @property {module:model/AnalyticsEndpointDistribution}
     */
    AnalyticsEndpointDistribution: AnalyticsEndpointDistribution,
    /**
     * The AnalyticsEndpointDistributionDistribution model constructor.
     * @property {module:model/AnalyticsEndpointDistributionDistribution}
     */
    AnalyticsEndpointDistributionDistribution: AnalyticsEndpointDistributionDistribution,
    /**
     * The AnalyticsFeedbackComments model constructor.
     * @property {module:model/AnalyticsFeedbackComments}
     */
    AnalyticsFeedbackComments: AnalyticsFeedbackComments,
    /**
     * The AnalyticsFeedbackCommentsComments model constructor.
     * @property {module:model/AnalyticsFeedbackCommentsComments}
     */
    AnalyticsFeedbackCommentsComments: AnalyticsFeedbackCommentsComments,
    /**
     * The AnalyticsFeedbackScores model constructor.
     * @property {module:model/AnalyticsFeedbackScores}
     */
    AnalyticsFeedbackScores: AnalyticsFeedbackScores,
    /**
     * The AnalyticsRoiData model constructor.
     * @property {module:model/AnalyticsRoiData}
     */
    AnalyticsRoiData: AnalyticsRoiData,
    /**
     * The AnalyticsRoiDataRoiRanges model constructor.
     * @property {module:model/AnalyticsRoiDataRoiRanges}
     */
    AnalyticsRoiDataRoiRanges: AnalyticsRoiDataRoiRanges,
    /**
     * The AnalyticsTopUsers model constructor.
     * @property {module:model/AnalyticsTopUsers}
     */
    AnalyticsTopUsers: AnalyticsTopUsers,
    /**
     * The AnalyticsTopUsersUsage model constructor.
     * @property {module:model/AnalyticsTopUsersUsage}
     */
    AnalyticsTopUsersUsage: AnalyticsTopUsersUsage,
    /**
     * The AnalyticsUsage model constructor.
     * @property {module:model/AnalyticsUsage}
     */
    AnalyticsUsage: AnalyticsUsage,
    /**
     * The AnalyticsUsageUsage model constructor.
     * @property {module:model/AnalyticsUsageUsage}
     */
    AnalyticsUsageUsage: AnalyticsUsageUsage,
    /**
     * The Content model constructor.
     * @property {module:model/Content}
     */
    Content: Content,
    /**
     * The ContentContentProperties model constructor.
     * @property {module:model/ContentContentProperties}
     */
    ContentContentProperties: ContentContentProperties,
    /**
     * The ContentContentPropertiesLevels model constructor.
     * @property {module:model/ContentContentPropertiesLevels}
     */
    ContentContentPropertiesLevels: ContentContentPropertiesLevels,
    /**
     * The Enterprise model constructor.
     * @property {module:model/Enterprise}
     */
    Enterprise: Enterprise,
    /**
     * The Error model constructor.
     * @property {module:model/Error}
     */
    Error: Error,
    /**
     * The Grant model constructor.
     * @property {module:model/Grant}
     */
    Grant: Grant,
    /**
     * The Meeting model constructor.
     * @property {module:model/Meeting}
     */
    Meeting: Meeting,
    /**
     * The Partition model constructor.
     * @property {module:model/Partition}
     */
    Partition: Partition,
    /**
     * The Payload model constructor.
     * @property {module:model/Payload}
     */
    Payload: Payload,
    /**
     * The Payload1 model constructor.
     * @property {module:model/Payload1}
     */
    Payload1: Payload1,
    /**
     * The Payload2 model constructor.
     * @property {module:model/Payload2}
     */
    Payload2: Payload2,
    /**
     * The Recording model constructor.
     * @property {module:model/Recording}
     */
    Recording: Recording,
    /**
     * The RecordingRecordingChapters model constructor.
     * @property {module:model/RecordingRecordingChapters}
     */
    RecordingRecordingChapters: RecordingRecordingChapters,
    /**
     * The RecordingRecordingSessions model constructor.
     * @property {module:model/RecordingRecordingSessions}
     */
    RecordingRecordingSessions: RecordingRecordingSessions,
    /**
     * The RecordingStartedBy model constructor.
     * @property {module:model/RecordingStartedBy}
     */
    RecordingStartedBy: RecordingStartedBy,
    /**
     * The RecordingSummary model constructor.
     * @property {module:model/RecordingSummary}
     */
    RecordingSummary: RecordingSummary,
    /**
     * The Room model constructor.
     * @property {module:model/Room}
     */
    Room: Room,
    /**
     * The Scope model constructor.
     * @property {module:model/Scope}
     */
    Scope: Scope,
    /**
     * The User model constructor.
     * @property {module:model/User}
     */
    User: User,
    /**
     * The AnalyticsApi service constructor.
     * @property {module:api/AnalyticsApi}
     */
    AnalyticsApi: AnalyticsApi,
    /**
     * The AuthenticationApi service constructor.
     * @property {module:api/AuthenticationApi}
     */
    AuthenticationApi: AuthenticationApi,
    /**
     * The CommandCenterApi service constructor.
     * @property {module:api/CommandCenterApi}
     */
    CommandCenterApi: CommandCenterApi,
    /**
     * The EnterpriseApi service constructor.
     * @property {module:api/EnterpriseApi}
     */
    EnterpriseApi: EnterpriseApi,
    /**
     * The HistoryApi service constructor.
     * @property {module:api/HistoryApi}
     */
    HistoryApi: HistoryApi,
    /**
     * The MeetingApi service constructor.
     * @property {module:api/MeetingApi}
     */
    MeetingApi: MeetingApi,
    /**
     * The RecordingApi service constructor.
     * @property {module:api/RecordingApi}
     */
    RecordingApi: RecordingApi,
    /**
     * The UserApi service constructor.
     * @property {module:api/UserApi}
     */
    UserApi: UserApi
  };

  return exports;
}));
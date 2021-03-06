/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. <p>This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you can see and try actual API calls to manage User Accounts, Meetings, and Recordings, pull Analytical Data and Current State information.</p>    <nosdk> <hr> <div> <div class=\"key\">     <a href=\"./basics.html\" target=\"_\"><img class=\"keyimg\" src=\"./img/bjnmeeting.png\"/></a> </div> <div class=\"keybox\"> Basic instructions about What is a BlueJeans Meeting, and Getting Started Using API's, are <a href=\"./basics.html\" target=\"_blank\">available here <i class=\"glyphicon glyphicon-new-window\"></i></a>. </div> </div> <hr> <alert>2/21/2019</alert> Change response of Change layout and Endpoint API's to 204<br/> 12/03/2018 Add API for setting user profile photograph.<br/> 10/17/2018 Updated API field definitions for time variables to be 64-bit .<br/> 7/23/2018 Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> </nosdk> <hr> 
 *
 * OpenAPI spec version: 1.0.4402212019
 * Contact: glenn@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.meetings.api;

import com.bluejeans.api.rest.meetings.ApiException;
import com.bluejeans.api.rest.meetings.model.Content;
import com.bluejeans.api.rest.meetings.model.Error;
import com.bluejeans.api.rest.meetings.model.Meeting;
import com.bluejeans.api.rest.meetings.model.MeetingSharing;
import com.bluejeans.api.rest.meetings.model.ModifySharing;
import com.bluejeans.api.rest.meetings.model.RecordingHistoryList;
import com.bluejeans.api.rest.meetings.model.RecordingMovedComp;
import com.bluejeans.api.rest.meetings.model.SetSharing;
import org.junit.Test;
import org.junit.Ignore;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

/**
 * API tests for RecordingApi
 */
@Ignore
public class RecordingApiTest {

    private final RecordingApi api = new RecordingApi();

    
    /**
     * Enable Recording Sharing
     *
     * This endpoint creates a sharing authorization record for the specified meeting recording.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void createShareRecordingsTest() throws ApiException {
        Integer userId = null;
        String meetingGuid = null;
        SetSharing setSharing = null;
        MeetingSharing response = api.createShareRecordings(userId, meetingGuid, setSharing);

        // TODO: test validations
    }
    
    /**
     * Delete All Recordings for a Specified Meeting GUID
     *
     * This endpoint stops recording for a meeting in progress. 
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void deleteAllRecordingsByMeetingGuidTest() throws ApiException {
        Integer userId = null;
        String meetingGuid = null;
        Meeting response = api.deleteAllRecordingsByMeetingGuid(userId, meetingGuid);

        // TODO: test validations
    }
    
    /**
     * Delete a Specified Recording Chapter
     *
     * This endpoint stops recording for a meeting in progress.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void deleteRecordingChapterTest() throws ApiException {
        Integer userId = null;
        Integer meetingId = null;
        Integer recordingChapterId = null;
        Meeting response = api.deleteRecordingChapter(userId, meetingId, recordingChapterId);

        // TODO: test validations
    }
    
    /**
     * Delete Recording Sharing
     *
     * This endpoint deletes the sharing authorization associated with a meeting recording.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void deleteShareRecordingsTest() throws ApiException {
        Integer userId = null;
        String meetingGuid = null;
        api.deleteShareRecordings(userId, meetingGuid);

        // TODO: test validations
    }
    
    /**
     * Get All Recordings for a Specified Meeting ID
     *
     * This endpoint lists the recordings for a meeting.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getMeetingRecordingsTest() throws ApiException {
        Integer userId = null;
        Integer meetingId = null;
        String meetingGuid = null;
        RecordingHistoryList response = api.getMeetingRecordings(userId, meetingId, meetingGuid);

        // TODO: test validations
    }
    
    /**
     * Get Recording Download Link
     *
     * This endpoint retrieves properties about the recording chapter.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getRecordingContentTest() throws ApiException {
        Integer userId = null;
        Integer contentId = null;
        Boolean isDownloadable = null;
        Content response = api.getRecordingContent(userId, contentId, isDownloadable);

        // TODO: test validations
    }
    
    /**
     * List Recording Sharing
     *
     * This endpoint retrieves a the sharing authorization information for a meeting&#39;s recording. If no sharing has been authorized for the meeting, this API returns a 404 error.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getShareRecordingsTest() throws ApiException {
        Integer userId = null;
        String meetingGuid = null;
        MeetingSharing response = api.getShareRecordings(userId, meetingGuid);

        // TODO: test validations
    }
    
    /**
     * Modify Recording Sharing
     *
     * This endpoint modifieds the sharing authorization attributes for a meeting recording.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void modifyShareRecordingsTest() throws ApiException {
        Integer userId = null;
        String meetingGuid = null;
        String sharingId = null;
        ModifySharing modifySharing = null;
        MeetingSharing response = api.modifyShareRecordings(userId, meetingGuid, sharingId, modifySharing);

        // TODO: test validations
    }
    
    /**
     * Move Recording Ownership
     *
     * This endpoint changes the ownership for all recordings from the original owner account and moves them to the new owner account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void moveRecordingOwnerTest() throws ApiException {
        Integer userId = null;
        Integer originalOwner = null;
        Integer newOwner = null;
        RecordingMovedComp response = api.moveRecordingOwner(userId, originalOwner, newOwner);

        // TODO: test validations
    }
    
    /**
     * Start Recording
     *
     * This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void startRecordingTest() throws ApiException {
        Integer userId = null;
        Integer meetingId = null;
        String action = null;
        api.startRecording(userId, meetingId, action);

        // TODO: test validations
    }
    
    /**
     * Stop Recording
     *
     * This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void stopRecordingTest() throws ApiException {
        Integer userId = null;
        Integer meetingId = null;
        String action = null;
        api.stopRecording(userId, meetingId, action);

        // TODO: test validations
    }
    
}

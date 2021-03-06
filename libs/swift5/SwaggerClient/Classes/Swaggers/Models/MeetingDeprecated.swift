//
// MeetingDeprecated.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Foundation


/** DEPRECATED (2/5/2018) -- This JSON object contains the fields associated with a BlueJeans&#39;meeting. */

public struct MeetingDeprecated: Codable {

    /** Unique identifier for meeting. */
    public var _id: Int?
    public var title: String
    public var _description: String?
    /** A [UNIX Timestamp](https://currentmillis.com/) in milliseconds */
    public var start: Int64
    /** A [UNIX Timestamp](https://currentmillis.com/) in milliseconds */
    public var end: Int64
    public var timezone: String?
    /** The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join. */
    public var numericMeetingId: String?
    public var attendeePasscode: String?
    /** Use the scheduler&#39;s personal meeting room and Id for this meeting. */
    public var isPersonalMeeting: Bool?
    /** If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins. */
    public var isLargeMeeting: Bool?
    /** Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting. */
    public var addAttendeePasscode: Bool?
    public var endPointVersion: String
    public var endPointType: String
    public var attendees: [Attendee]?
    public var advancedMeetingOptions: MeetingDeprecatedAdvancedMeetingOptions?
    public var recurrencePattern: MeetingRecurrencePattern?

    public init(_id: Int?, title: String, _description: String?, start: Int64, end: Int64, timezone: String?, numericMeetingId: String?, attendeePasscode: String?, isPersonalMeeting: Bool?, isLargeMeeting: Bool?, addAttendeePasscode: Bool?, endPointVersion: String, endPointType: String, attendees: [Attendee]?, advancedMeetingOptions: MeetingDeprecatedAdvancedMeetingOptions?, recurrencePattern: MeetingRecurrencePattern?) {
        self._id = _id
        self.title = title
        self._description = _description
        self.start = start
        self.end = end
        self.timezone = timezone
        self.numericMeetingId = numericMeetingId
        self.attendeePasscode = attendeePasscode
        self.isPersonalMeeting = isPersonalMeeting
        self.isLargeMeeting = isLargeMeeting
        self.addAttendeePasscode = addAttendeePasscode
        self.endPointVersion = endPointVersion
        self.endPointType = endPointType
        self.attendees = attendees
        self.advancedMeetingOptions = advancedMeetingOptions
        self.recurrencePattern = recurrencePattern
    }

    public enum CodingKeys: String, CodingKey { 
        case _id = "id"
        case title
        case _description = "description"
        case start
        case end
        case timezone
        case numericMeetingId
        case attendeePasscode
        case isPersonalMeeting
        case isLargeMeeting
        case addAttendeePasscode
        case endPointVersion
        case endPointType
        case attendees
        case advancedMeetingOptions
        case recurrencePattern
    }


}


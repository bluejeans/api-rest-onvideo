//
// MeetingEmailsModerator.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Foundation



public struct MeetingEmailsModerator: Codable {

    public var create: MeetingEmailsProperty?
    public var update: MeetingEmailsProperty?
    public var delete: MeetingEmailsProperty?

    public init(create: MeetingEmailsProperty?, update: MeetingEmailsProperty?, delete: MeetingEmailsProperty?) {
        self.create = create
        self.update = update
        self.delete = delete
    }


}


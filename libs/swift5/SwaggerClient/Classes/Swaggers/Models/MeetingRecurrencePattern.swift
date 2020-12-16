//
// MeetingRecurrencePattern.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Foundation



public struct MeetingRecurrencePattern: Codable {

    public enum RecurrenceType: String, Codable { 
        case daily = "DAILY"
        case weekly = "WEEKLY"
        case monthly = "MONTHLY"
    }
    public enum WeekOfMonth: String, Codable { 
        case _none = "NONE"
        case first = "FIRST"
        case second = "SECOND"
        case third = "THIRD"
        case fourth = "FOURTH"
        case last = "LAST"
    }
    public enum MonthOfYear: String, Codable { 
        case _none = "NONE"
        case january = "JANUARY"
        case february = "FEBRUARY"
        case march = "MARCH"
        case april = "APRIL"
        case may = "MAY"
        case june = "JUNE"
        case july = "JULY"
        case august = "AUGUST"
        case september = "SEPTEMBER"
        case october = "OCTOBER"
        case november = "NOVEMBER"
        case december = "DECEMBER"
    }
    public var recurrenceType: RecurrenceType?
    /** This is the epoch-based ending-time (in milliseconds) for the recurrence chain of meetings. */
    public var endDate: Int64?
    /** The number of reoccurring meetings */
    public var recurrenceCount: Int?
    /** the interval of reoccurring meetings. */
    public var frequency: Int?
    /** bit mask for selecting which days of the week.  Sunday:1, Monday:2, Tuesday:4, Wednesday:8, Thursday:16, Friday:32, and Saturday:64 */
    public var daysOfWeekMask: Int?
    /** the numerical day in the month for monthly reoccurring meetings. */
    public var dayOfMonth: Int?
    /** the numerical week in the month for reoccuring meetings. */
    public var weekOfMonth: WeekOfMonth?
    /** the month in the year for reoccurring meetings. */
    public var monthOfYear: MonthOfYear?

    public init(recurrenceType: RecurrenceType?, endDate: Int64?, recurrenceCount: Int?, frequency: Int?, daysOfWeekMask: Int?, dayOfMonth: Int?, weekOfMonth: WeekOfMonth?, monthOfYear: MonthOfYear?) {
        self.recurrenceType = recurrenceType
        self.endDate = endDate
        self.recurrenceCount = recurrenceCount
        self.frequency = frequency
        self.daysOfWeekMask = daysOfWeekMask
        self.dayOfMonth = dayOfMonth
        self.weekOfMonth = weekOfMonth
        self.monthOfYear = monthOfYear
    }


}

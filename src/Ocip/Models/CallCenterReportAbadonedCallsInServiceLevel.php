<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportAbadonedCallsInServiceLevel
 *
 * The call center enhanced reporting abadoned calls possible values for service
 * level thresholds
 *
 * @method static CallCenterReportAbadonedCallsInServiceLevel
 * IGNORE_ALL_ABANDONED_CALLS()
 * @method static CallCenterReportAbadonedCallsInServiceLevel
 * INCLUDE_ALL_ABANDONED_CALLS()
 * @method static CallCenterReportAbadonedCallsInServiceLevel
 * INCLUDE_ABANDONED_CALLS_EXCEPT_BEFORE_ENTRANCE_COMPLETES()
 * @method static CallCenterReportAbadonedCallsInServiceLevel
 * INCLUDE_ABANDONED_CALLS_EXCEPT_IN_INTERVAL()
 * @EnumValueType string
 */
class CallCenterReportAbadonedCallsInServiceLevel extends \MyCLabs\Enum\Enum
{

    const IGNORE_ALL_ABANDONED_CALLS = 'Ignore All Abandoned Calls';

    const INCLUDE_ALL_ABANDONED_CALLS = 'Include All Abandoned Calls';

    const INCLUDE_ABANDONED_CALLS_EXCEPT_BEFORE_ENTRANCE_COMPLETES = 'Include Abandoned Calls Except Before Entrance Completes';

    const INCLUDE_ABANDONED_CALLS_EXCEPT_IN_INTERVAL = 'Include Abandoned Calls Except In Interval';


}


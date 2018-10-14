<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterStatisticsSource
 *
 * The call center statistics source.
 *
 * @method static CallCenterStatisticsSource NONE()
 * @method static CallCenterStatisticsSource APPLICATION_SERVER()
 * @method static CallCenterStatisticsSource CALL_CENTER_REPORTING_SERVER()
 * @ValueType string
 */
class CallCenterStatisticsSource extends \MyCLabs\Enum\Enum
{

    const NONE = 'None';

    const APPLICATION_SERVER = 'Application Server';

    const CALL_CENTER_REPORTING_SERVER = 'Call Center Reporting Server';


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportTimeFormat
 *
 * Time format for a call center enhanced reporting report.
 *
 * @method static CallCenterReportTimeFormat AM_PM()
 * @method static CallCenterReportTimeFormat _24HOUR()
 * @ValueType string
 */
class CallCenterReportTimeFormat extends \MyCLabs\Enum\Enum
{

    const AM_PM = 'AM/PM';

    const _24HOUR = '24Hour';


}


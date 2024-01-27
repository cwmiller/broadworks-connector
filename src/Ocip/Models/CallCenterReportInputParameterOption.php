<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportInputParameterOption
 *
 * Options for call center enhanced reporting input parameters.
 *
 * @method static CallCenterReportInputParameterOption REQUIRED()
 * @method static CallCenterReportInputParameterOption HIDDEN()
 * @EnumValueType string
 */
class CallCenterReportInputParameterOption extends \MyCLabs\Enum\Enum
{
    public const REQUIRED = 'Required';

    public const HIDDEN = 'Hidden';
}


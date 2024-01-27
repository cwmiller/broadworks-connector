<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportDataTemplateInputParameterOption
 *
 * Options for call center enhanced reporting data template input parameters.
 *
 * @method static CallCenterReportDataTemplateInputParameterOption REQUIRED()
 * @method static CallCenterReportDataTemplateInputParameterOption DOES_NOT_APPLY()
 * @EnumValueType string
 */
class CallCenterReportDataTemplateInputParameterOption extends \MyCLabs\Enum\Enum
{
    public const REQUIRED = 'Required';

    public const DOES_NOT_APPLY = 'Does Not Apply';
}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportFileFormat
 *
 * Call center enhanced reporting report file format.
 *
 * @method static CallCenterReportFileFormat PDF()
 * @method static CallCenterReportFileFormat XLS()
 * @EnumValueType string
 */
class CallCenterReportFileFormat extends \MyCLabs\Enum\Enum
{
    public const PDF = 'PDF';

    public const XLS = 'XLS';
}


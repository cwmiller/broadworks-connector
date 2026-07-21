<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PerformanceMeasurementReportingEncodingRI
 *
 * Choices for the Performance Measurement Reporting encoding values which includes 
 *        US-ASCII,ISO-8859-1,UTF-8
 *
 * @method static PerformanceMeasurementReportingEncodingRI US_ASCII()
 * @method static PerformanceMeasurementReportingEncodingRI ISO_8859_1()
 * @method static PerformanceMeasurementReportingEncodingRI UTF_8()
 * @EnumValueType string
 */
class PerformanceMeasurementReportingEncodingRI extends \MyCLabs\Enum\Enum
{
    public const US_ASCII = 'US-ASCII';

    public const ISO_8859_1 = 'ISO-8859-1';

    public const UTF_8 = 'UTF-8';
}


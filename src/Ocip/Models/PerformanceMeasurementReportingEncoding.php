<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PerformanceMeasurementReportingEncoding
 *
 * Choices for the Performance Measurement Reporting encoding.
 *
 * @method static PerformanceMeasurementReportingEncoding US_ACSII()
 * @method static PerformanceMeasurementReportingEncoding ISO_8859_1()
 * @method static PerformanceMeasurementReportingEncoding UTF_8()
 * @EnumValueType string
 */
class PerformanceMeasurementReportingEncoding extends \MyCLabs\Enum\Enum
{
    public const US_ACSII = 'US-ACSII';

    public const ISO_8859_1 = 'ISO-8859-1';

    public const UTF_8 = 'UTF-8';
}


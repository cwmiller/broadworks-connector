<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterEnhancedReportingBrandingChoice
 *
 * The call center enhanced reporting Enterprise or Group level branding choice.
 *
 * @method static CallCenterEnhancedReportingBrandingChoice SYSTEM()
 * @method static CallCenterEnhancedReportingBrandingChoice CUSTOM()
 * @EnumValueType string
 */
class CallCenterEnhancedReportingBrandingChoice extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const CUSTOM = 'Custom';
}


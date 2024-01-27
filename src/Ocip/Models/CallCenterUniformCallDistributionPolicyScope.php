<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterUniformCallDistributionPolicyScope
 *
 * Call Center Uniform Call Distribution Policy Scope.
 *
 * @method static CallCenterUniformCallDistributionPolicyScope AGENT()
 * @method static CallCenterUniformCallDistributionPolicyScope CALL_CENTER()
 * @EnumValueType string
 */
class CallCenterUniformCallDistributionPolicyScope extends \MyCLabs\Enum\Enum
{
    public const AGENT = 'Agent';

    public const CALL_CENTER = 'Call Center';
}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HuntGroupUniformCallDistributionPolicyScope
 *
 * Hunt group Uniform Call Distribution Policy Scope.
 *
 * @method static HuntGroupUniformCallDistributionPolicyScope AGENT()
 * @method static HuntGroupUniformCallDistributionPolicyScope HUNT_GROUP()
 * @EnumValueType string
 */
class HuntGroupUniformCallDistributionPolicyScope extends \MyCLabs\Enum\Enum
{
    public const AGENT = 'Agent';

    public const HUNT_GROUP = 'Hunt Group';
}


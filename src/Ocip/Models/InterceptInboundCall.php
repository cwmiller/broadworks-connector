<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * InterceptInboundCall
 *
 * The type of inbound calls to Intercept or allow.
 *
 * @method static InterceptInboundCall INTERCEPT_ALL()
 * @method static InterceptInboundCall ALLOW_ALL()
 * @method static InterceptInboundCall ALLOW_SYSTEM_DNS()
 * @EnumValueType string
 */
class InterceptInboundCall extends \MyCLabs\Enum\Enum
{
    public const INTERCEPT_ALL = 'Intercept All';

    public const ALLOW_ALL = 'Allow All';

    public const ALLOW_SYSTEM_DNS = 'Allow System Dns';
}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * InterceptOutboundCall
 *
 * The type of outbound calls to block or allow.
 *
 * @method static InterceptOutboundCall BLOCK_ALL()
 * @method static InterceptOutboundCall ALLOW_OUTBOUND_LOCAL_CALLS()
 * @method static InterceptOutboundCall ALLOW_OUTBOUND_ENTERPRISE_AND_GROUP_CALLS()
 * @EnumValueType string
 */
class InterceptOutboundCall extends \MyCLabs\Enum\Enum
{
    public const BLOCK_ALL = 'Block All';

    public const ALLOW_OUTBOUND_LOCAL_CALLS = 'Allow Outbound Local Calls';

    public const ALLOW_OUTBOUND_ENTERPRISE_AND_GROUP_CALLS = 'Allow Outbound Enterprise And Group Calls';
}


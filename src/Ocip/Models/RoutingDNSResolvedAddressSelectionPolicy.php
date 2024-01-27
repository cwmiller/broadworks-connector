<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RoutingDNSResolvedAddressSelectionPolicy
 *
 * Policy for choosing an address from the results of a DNS lookup.
 *
 * @method static RoutingDNSResolvedAddressSelectionPolicy STANDARD()
 * @method static RoutingDNSResolvedAddressSelectionPolicy LOAD_BALANCED()
 * @method static RoutingDNSResolvedAddressSelectionPolicy STATEFUL()
 * @EnumValueType string
 */
class RoutingDNSResolvedAddressSelectionPolicy extends \MyCLabs\Enum\Enum
{
    public const STANDARD = 'Standard';

    public const LOAD_BALANCED = 'Load Balanced';

    public const STATEFUL = 'Stateful';
}


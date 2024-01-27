<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BwDiameterPeerInstance
 *
 * The diameter peer instance type for an entry in the Peer Table.
 *
 * @method static BwDiameterPeerInstance XS()
 * @method static BwDiameterPeerInstance PS()
 * @EnumValueType string
 */
class BwDiameterPeerInstance extends \MyCLabs\Enum\Enum
{
    public const XS = 'XS';

    public const PS = 'PS';
}


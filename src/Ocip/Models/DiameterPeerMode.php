<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DiameterPeerMode
 *
 * Choices for the mode of a Diameter Peer.
 *
 * @method static DiameterPeerMode ACTIVE()
 * @method static DiameterPeerMode STANDBY()
 * @EnumValueType string
 */
class DiameterPeerMode extends \MyCLabs\Enum\Enum
{
    public const ACTIVE = 'Active';

    public const STANDBY = 'Standby';
}


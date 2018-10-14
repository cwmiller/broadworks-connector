<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DiameterPeerMode
 *
 * Choices for the mode of a Diameter Peer.
 *
 * @method static DiameterPeerMode ACTIVE()
 * @method static DiameterPeerMode STANDBY()
 * @ValueType string
 */
class DiameterPeerMode extends \MyCLabs\Enum\Enum
{

    const ACTIVE = 'Active';

    const STANDBY = 'Standby';


}


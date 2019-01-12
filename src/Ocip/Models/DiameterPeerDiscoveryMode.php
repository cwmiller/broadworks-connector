<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DiameterPeerDiscoveryMode
 *
 * Choices for Diameter peer discovery mode.
 *
 * @method static DiameterPeerDiscoveryMode LEGACY()
 * @method static DiameterPeerDiscoveryMode RFC6733ANY()
 * @method static DiameterPeerDiscoveryMode RFC6733TLSONLY()
 * @method static DiameterPeerDiscoveryMode RFC6733TCPONLY()
 * @EnumValueType string
 */
class DiameterPeerDiscoveryMode extends \MyCLabs\Enum\Enum
{

    const LEGACY = 'Legacy';

    const RFC6733ANY = 'Rfc6733Any';

    const RFC6733TLSONLY = 'Rfc6733TLSOnly';

    const RFC6733TCPONLY = 'Rfc6733TCPOnly';


}


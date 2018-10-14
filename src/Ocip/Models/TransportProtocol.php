<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TransportProtocol
 *
 * Network Transport Protocol.
 *
 * @method static TransportProtocol UDP()
 * @method static TransportProtocol TCP()
 * @method static TransportProtocol UNSPECIFIED()
 * @ValueType string
 */
class TransportProtocol extends \MyCLabs\Enum\Enum
{

    const UDP = 'UDP';

    const TCP = 'TCP';

    const UNSPECIFIED = 'Unspecified';


}


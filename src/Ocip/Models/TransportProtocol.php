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
 * @EnumValueType string
 */
class TransportProtocol extends \MyCLabs\Enum\Enum
{
    public const UDP = 'UDP';

    public const TCP = 'TCP';

    public const UNSPECIFIED = 'Unspecified';
}


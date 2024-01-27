<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtendedTransportProtocol
 *
 * Network Transport Protocol.
 *         
 *         The following values are only used in AS data mode and will fail in XS data mode:
 *           TLS
 *
 * @method static ExtendedTransportProtocol UDP()
 * @method static ExtendedTransportProtocol TCP()
 * @method static ExtendedTransportProtocol TLS()
 * @method static ExtendedTransportProtocol UNSPECIFIED()
 * @EnumValueType string
 */
class ExtendedTransportProtocol extends \MyCLabs\Enum\Enum
{
    public const UDP = 'UDP';

    public const TCP = 'TCP';

    public const TLS = 'TLS';

    public const UNSPECIFIED = 'Unspecified';
}


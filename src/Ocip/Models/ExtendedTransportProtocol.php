<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtendedTransportProtocol
 *
 * Network Transport Protocol.
 *
 * @method static ExtendedTransportProtocol UDP()
 * @method static ExtendedTransportProtocol TCP()
 * @method static ExtendedTransportProtocol TLS()
 * @method static ExtendedTransportProtocol UNSPECIFIED()
 * @EnumValueType string
 */
class ExtendedTransportProtocol extends \MyCLabs\Enum\Enum
{

    const UDP = 'UDP';

    const TCP = 'TCP';

    const TLS = 'TLS';

    const UNSPECIFIED = 'Unspecified';


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPACLExtendedTransportProtocol
 *
 * SIP ACL Network Transport Protocol.
 *         
 *         The following values are only used in AS data mode and will fail in XS data mode:
 *           TLS
 *
 * @method static SIPACLExtendedTransportProtocol UDP()
 * @method static SIPACLExtendedTransportProtocol TCP()
 * @method static SIPACLExtendedTransportProtocol TLS()
 * @method static SIPACLExtendedTransportProtocol ALL()
 * @EnumValueType string
 */
class SIPACLExtendedTransportProtocol extends \MyCLabs\Enum\Enum
{

    const UDP = 'UDP';

    const TCP = 'TCP';

    const TLS = 'TLS';

    const ALL = 'All';


}


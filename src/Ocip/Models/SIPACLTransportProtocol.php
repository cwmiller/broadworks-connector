<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPACLTransportProtocol
 *
 * SIP ACL Network Transport Protocol.
 *
 * @method static SIPACLTransportProtocol UDP()
 * @method static SIPACLTransportProtocol TCP()
 * @method static SIPACLTransportProtocol ALL()
 * @EnumValueType string
 */
class SIPACLTransportProtocol extends \MyCLabs\Enum\Enum
{
    public const UDP = 'UDP';

    public const TCP = 'TCP';

    public const ALL = 'All';
}


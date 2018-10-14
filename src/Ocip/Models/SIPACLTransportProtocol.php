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
 * @ValueType string
 */
class SIPACLTransportProtocol extends \MyCLabs\Enum\Enum
{

    const UDP = 'UDP';

    const TCP = 'TCP';

    const ALL = 'All';


}


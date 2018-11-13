<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallingNameRetrievalQueryProtocol
 *
 * Query Protocol.
 *
 * @method static CallingNameRetrievalQueryProtocol SIP()
 * @method static CallingNameRetrievalQueryProtocol SOAP()
 * @EnumValueType string
 */
class CallingNameRetrievalQueryProtocol extends \MyCLabs\Enum\Enum
{

    const SIP = 'Sip';

    const SOAP = 'Soap';


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallingNameRetrievalQueryProtocol
 *
 * Query Protocol.
 *
 * @method static CallingNameRetrievalQueryProtocol SIP()
 * @method static CallingNameRetrievalQueryProtocol SOAP()
 * @ValueType string
 */
class CallingNameRetrievalQueryProtocol extends \MyCLabs\Enum\Enum
{

    const SIP = 'Sip';

    const SOAP = 'Soap';


}


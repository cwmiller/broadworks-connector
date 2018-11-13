<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringOriginatingAction15sp2
 *
 * Possible originating actions for Communication Barring.
 *
 * @method static CommunicationBarringOriginatingAction15sp2 ALLOW()
 * @method static CommunicationBarringOriginatingAction15sp2 BLOCK()
 * @method static CommunicationBarringOriginatingAction15sp2 AUTHORIZATION_CODE()
 * @method static CommunicationBarringOriginatingAction15sp2 TREATMENT()
 * @method static CommunicationBarringOriginatingAction15sp2 TRANSFER()
 * @EnumValueType string
 */
class CommunicationBarringOriginatingAction15sp2 extends \MyCLabs\Enum\Enum
{

    const ALLOW = 'Allow';

    const BLOCK = 'Block';

    const AUTHORIZATION_CODE = 'Authorization Code';

    const TREATMENT = 'Treatment';

    const TRANSFER = 'Transfer';


}


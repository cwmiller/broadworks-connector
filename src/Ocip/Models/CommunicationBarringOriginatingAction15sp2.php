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
    public const ALLOW = 'Allow';

    public const BLOCK = 'Block';

    public const AUTHORIZATION_CODE = 'Authorization Code';

    public const TREATMENT = 'Treatment';

    public const TRANSFER = 'Transfer';
}


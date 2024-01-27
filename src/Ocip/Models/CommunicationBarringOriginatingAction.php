<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringOriginatingAction
 *
 * Possible originating actions for Communication Barring.
 *
 * @method static CommunicationBarringOriginatingAction ALLOW()
 * @method static CommunicationBarringOriginatingAction ALLOW_TIMED()
 * @method static CommunicationBarringOriginatingAction BLOCK()
 * @method static CommunicationBarringOriginatingAction AUTHORIZATION_CODE()
 * @method static CommunicationBarringOriginatingAction AUTHORIZATION_CODE_TIMED()
 * @method static CommunicationBarringOriginatingAction TREATMENT()
 * @method static CommunicationBarringOriginatingAction TRANSFER()
 * @EnumValueType string
 */
class CommunicationBarringOriginatingAction extends \MyCLabs\Enum\Enum
{
    public const ALLOW = 'Allow';

    public const ALLOW_TIMED = 'Allow Timed';

    public const BLOCK = 'Block';

    public const AUTHORIZATION_CODE = 'Authorization Code';

    public const AUTHORIZATION_CODE_TIMED = 'Authorization Code Timed';

    public const TREATMENT = 'Treatment';

    public const TRANSFER = 'Transfer';
}


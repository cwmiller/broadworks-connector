<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressRedirectionAction
 *
 * CommPilot Express Transfer or Forward Options.
 *
 * @method static CommPilotExpressRedirectionAction TRANSFER_TO_VOICE_MAIL()
 * @method static CommPilotExpressRedirectionAction FORWARD()
 * @EnumValueType string
 */
class CommPilotExpressRedirectionAction extends \MyCLabs\Enum\Enum
{
    public const TRANSFER_TO_VOICE_MAIL = 'Transfer To Voice Mail';

    public const FORWARD = 'Forward';
}


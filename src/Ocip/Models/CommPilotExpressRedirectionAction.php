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

    const TRANSFER_TO_VOICE_MAIL = 'Transfer To Voice Mail';

    const FORWARD = 'Forward';


}


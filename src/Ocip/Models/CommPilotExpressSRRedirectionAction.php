<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRRedirectionAction
 *
 * CommPilot Express SR Transfer or Forward Options.
 *
 * @method static CommPilotExpressSRRedirectionAction TRANSFER_TO_VOICE_MAIL()
 * @method static CommPilotExpressSRRedirectionAction FORWARD()
 * @EnumValueType string
 */
class CommPilotExpressSRRedirectionAction extends \MyCLabs\Enum\Enum
{

    const TRANSFER_TO_VOICE_MAIL = 'Transfer To Voice Mail';

    const FORWARD = 'Forward';


}


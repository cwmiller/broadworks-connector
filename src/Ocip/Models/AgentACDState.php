<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AgentACDState
 *
 * Agent Automatic Call Distribution (ACD) State.
 *
 * @method static AgentACDState SIGN_IN()
 * @method static AgentACDState SIGN_OUT()
 * @method static AgentACDState AVAILABLE()
 * @method static AgentACDState UNAVAILABLE()
 * @method static AgentACDState WRAP_UP()
 * @EnumValueType string
 */
class AgentACDState extends \MyCLabs\Enum\Enum
{

    const SIGN_IN = 'Sign-In';

    const SIGN_OUT = 'Sign-Out';

    const AVAILABLE = 'Available';

    const UNAVAILABLE = 'Unavailable';

    const WRAP_UP = 'Wrap-Up';


}


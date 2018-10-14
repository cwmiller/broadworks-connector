<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AgentACDAutomaticState
 *
 * Agent Automatic Call Distribution (ACD) State.
 *         States available for Wrap-Up agent state management.
 *
 * @method static AgentACDAutomaticState AVAILABLE()
 * @method static AgentACDAutomaticState UNAVAILABLE()
 * @method static AgentACDAutomaticState WRAP_UP()
 * @ValueType string
 */
class AgentACDAutomaticState extends \MyCLabs\Enum\Enum
{

    const AVAILABLE = 'Available';

    const UNAVAILABLE = 'Unavailable';

    const WRAP_UP = 'Wrap-Up';


}


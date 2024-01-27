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
 * @EnumValueType string
 */
class AgentACDAutomaticState extends \MyCLabs\Enum\Enum
{
    public const AVAILABLE = 'Available';

    public const UNAVAILABLE = 'Unavailable';

    public const WRAP_UP = 'Wrap-Up';
}


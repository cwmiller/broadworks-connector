<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IncomingCallToUserAliasMode
 *
 * User alias usage mode for AS translations on incoming calls.
 *
 * @method static IncomingCallToUserAliasMode ENABLED()
 * @method static IncomingCallToUserAliasMode EXPLICITALIAS()
 * @method static IncomingCallToUserAliasMode DISABLED()
 * @EnumValueType string
 */
class IncomingCallToUserAliasMode extends \MyCLabs\Enum\Enum
{
    public const ENABLED = 'Enabled';

    public const EXPLICITALIAS = 'ExplicitAlias';

    public const DISABLED = 'Disabled';
}


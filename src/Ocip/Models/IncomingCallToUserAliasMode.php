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
 * @ValueType string
 */
class IncomingCallToUserAliasMode extends \MyCLabs\Enum\Enum
{

    const ENABLED = 'Enabled';

    const EXPLICITALIAS = 'ExplicitAlias';

    const DISABLED = 'Disabled';


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPSuppressRFC3312Preconditions
 *
 * Choices for SIP Suppress RFC3312 Preconditions
 *
 * @method static SIPSuppressRFC3312Preconditions ALWAYS()
 * @method static SIPSuppressRFC3312Preconditions NEVER()
 * @method static SIPSuppressRFC3312Preconditions SUPPRESS_IF_SINGLE_DIALOG()
 * @EnumValueType string
 */
class SIPSuppressRFC3312Preconditions extends \MyCLabs\Enum\Enum
{

    const ALWAYS = 'Always';

    const NEVER = 'Never';

    const SUPPRESS_IF_SINGLE_DIALOG = 'Suppress If Single Dialog';


}


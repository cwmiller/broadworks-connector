<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallingLineIdentityForRedirectedCalls
 *
 * Maximum Call Time for Unanswered Calls
 *
 * @method static CallingLineIdentityForRedirectedCalls ORIGINATING_IDENTITY()
 * @method static CallingLineIdentityForRedirectedCalls
 * REDIRECTING_USER_IDENTITY_FOR_EXTERNAL_REDIRECTIONS()
 * @method static CallingLineIdentityForRedirectedCalls
 * REDIRECTING_USER_IDENTITY_FOR_ALL_REDIRECTIONS()
 * @ValueType string
 */
class CallingLineIdentityForRedirectedCalls extends \MyCLabs\Enum\Enum
{

    const ORIGINATING_IDENTITY = 'Originating Identity';

    const REDIRECTING_USER_IDENTITY_FOR_EXTERNAL_REDIRECTIONS = 'Redirecting User Identity For External Redirections';

    const REDIRECTING_USER_IDENTITY_FOR_ALL_REDIRECTIONS = 'Redirecting User Identity For All Redirections';


}


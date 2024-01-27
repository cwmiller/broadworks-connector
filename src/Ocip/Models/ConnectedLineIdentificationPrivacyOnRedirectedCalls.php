<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ConnectedLineIdentificationPrivacyOnRedirectedCalls
 *
 * Choices for Connected Line Identification Privacy on Redirected Calls
 *
 * @method static ConnectedLineIdentificationPrivacyOnRedirectedCalls NO_PRIVACY()
 * @method static ConnectedLineIdentificationPrivacyOnRedirectedCalls PRIVACY_FOR_EXTERNAL_CALLS()
 * @method static ConnectedLineIdentificationPrivacyOnRedirectedCalls PRIVACY_FOR_ALL_CALLS()
 * @EnumValueType string
 */
class ConnectedLineIdentificationPrivacyOnRedirectedCalls extends \MyCLabs\Enum\Enum
{
    public const NO_PRIVACY = 'No Privacy';

    public const PRIVACY_FOR_EXTERNAL_CALLS = 'Privacy For External Calls';

    public const PRIVACY_FOR_ALL_CALLS = 'Privacy For All Calls';
}


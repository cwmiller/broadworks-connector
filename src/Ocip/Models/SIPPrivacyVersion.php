<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPPrivacyVersion
 *
 * Privacy Version.
 *
 * @method static SIPPrivacyVersion RFC3323()
 * @method static SIPPrivacyVersion RFC3323_JAPAN()
 * @method static SIPPrivacyVersion PRIVACY_03()
 * @method static SIPPrivacyVersion PRIVACY_00()
 * @EnumValueType string
 */
class SIPPrivacyVersion extends \MyCLabs\Enum\Enum
{
    public const RFC3323 = 'RFC3323';

    public const RFC3323_JAPAN = 'RFC3323 Japan';

    public const PRIVACY_03 = 'Privacy 03';

    public const PRIVACY_00 = 'Privacy 00';
}


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
 * @ValueType string
 */
class SIPPrivacyVersion extends \MyCLabs\Enum\Enum
{

    const RFC3323 = 'RFC3323';

    const RFC3323_JAPAN = 'RFC3323 Japan';

    const PRIVACY_03 = 'Privacy 03';

    const PRIVACY_00 = 'Privacy 00';


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SMTPSecureMode
 *
 * Choices for SMTP secure mode.
 *
 * @method static SMTPSecureMode DISABLED()
 * @method static SMTPSecureMode SMTPS()
 * @method static SMTPSecureMode STARTTLS()
 * @EnumValueType string
 */
class SMTPSecureMode extends \MyCLabs\Enum\Enum
{
    public const DISABLED = 'Disabled';

    public const SMTPS = 'SMTPS';

    public const STARTTLS = 'STARTTLS';
}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPDiversionReason
 *
 * Sip Diversion Reasons.
 *
 * @method static SIPDiversionReason UNKNOWN()
 * @method static SIPDiversionReason USER_BUSY()
 * @method static SIPDiversionReason NO_ANSWER()
 * @method static SIPDiversionReason UNAVAILABLE()
 * @method static SIPDiversionReason UNCONDITIONAL()
 * @method static SIPDiversionReason DEFLECTION()
 * @method static SIPDiversionReason TIME_OF_DAY()
 * @method static SIPDiversionReason DO_NOT_DISTURB()
 * @method static SIPDiversionReason FOLLOW_ME()
 * @method static SIPDiversionReason OUT_OF_SERVICE()
 * @method static SIPDiversionReason AWAY()
 * @method static SIPDiversionReason TRANSFER()
 * @method static SIPDiversionReason VOICEMAIL()
 * @method static SIPDiversionReason HUNT_GROUP()
 * @method static SIPDiversionReason CALL_CENTER()
 * @method static SIPDiversionReason ROUTE_POINT()
 * @method static SIPDiversionReason BW_IMPLICITID()
 * @method static SIPDiversionReason BW_EXPLICITID()
 * @EnumValueType string
 */
class SIPDiversionReason extends \MyCLabs\Enum\Enum
{
    public const UNKNOWN = 'unknown';

    public const USER_BUSY = 'user-busy';

    public const NO_ANSWER = 'no-answer';

    public const UNAVAILABLE = 'unavailable';

    public const UNCONDITIONAL = 'unconditional';

    public const DEFLECTION = 'deflection';

    public const TIME_OF_DAY = 'time-of-day';

    public const DO_NOT_DISTURB = 'do-not-disturb';

    public const FOLLOW_ME = 'follow-me';

    public const OUT_OF_SERVICE = 'out-of-service';

    public const AWAY = 'away';

    public const TRANSFER = 'transfer';

    public const VOICEMAIL = 'voicemail';

    public const HUNT_GROUP = 'hunt-group';

    public const CALL_CENTER = 'call-center';

    public const ROUTE_POINT = 'route-point';

    public const BW_IMPLICITID = 'BW-ImplicitID';

    public const BW_EXPLICITID = 'BW-ExplicitID';
}


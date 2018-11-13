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

    const UNKNOWN = 'unknown';

    const USER_BUSY = 'user-busy';

    const NO_ANSWER = 'no-answer';

    const UNAVAILABLE = 'unavailable';

    const UNCONDITIONAL = 'unconditional';

    const DEFLECTION = 'deflection';

    const TIME_OF_DAY = 'time-of-day';

    const DO_NOT_DISTURB = 'do-not-disturb';

    const FOLLOW_ME = 'follow-me';

    const OUT_OF_SERVICE = 'out-of-service';

    const AWAY = 'away';

    const TRANSFER = 'transfer';

    const VOICEMAIL = 'voicemail';

    const HUNT_GROUP = 'hunt-group';

    const CALL_CENTER = 'call-center';

    const ROUTE_POINT = 'route-point';

    const BW_IMPLICITID = 'BW-ImplicitID';

    const BW_EXPLICITID = 'BW-ExplicitID';


}


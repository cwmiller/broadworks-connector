<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EarlyMediaSupportType
 *
 * Early Media Support types. This is typically used to configure the ringback tone delivery mode.
 *         When there is no early media, the call originator typically supplies ringback tone locally.
 *         RTP - Early Session refers to RFC 3959.
 *
 * @method static EarlyMediaSupportType NO_EARLY_MEDIA()
 * @method static EarlyMediaSupportType RTP_SESSION()
 * @method static EarlyMediaSupportType RTP_EARLY_SESSION()
 * @EnumValueType string
 */
class EarlyMediaSupportType extends \MyCLabs\Enum\Enum
{

    const NO_EARLY_MEDIA = 'No Early Media';

    const RTP_SESSION = 'RTP - Session';

    const RTP_EARLY_SESSION = 'RTP - Early Session';


}


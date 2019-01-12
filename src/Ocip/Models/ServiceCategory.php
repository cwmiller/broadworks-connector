<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceCategory
 *
 * List of supported Service Categories that have configurable default attributes
 * entries.
 *       The following elements are ignored in AS data mode:
 *          OMA Presence
 *       The following elements are ignored in XS data mode:
 *          ChargeNumber
 *          Integrated IMP
 *          Voice Portal Calling
 *
 * @method static ServiceCategory CALL_TRANSFER()
 * @method static ServiceCategory CALL_WAITING()
 * @method static ServiceCategory CALLING_NAME_RETRIEVAL()
 * @method static ServiceCategory CHARGE_NUMBER()
 * @method static ServiceCategory EXTERNAL_CALLING_LINE_ID_DELIVERY()
 * @method static ServiceCategory GROUP_NIGHT_FORWARDING()
 * @method static ServiceCategory INTEGRATED_IMP()
 * @method static ServiceCategory INTERCEPT_GROUP()
 * @method static ServiceCategory INTERNAL_CALLING_LINE_ID_DELIVERY()
 * @method static ServiceCategory MUSIC_ON_HOLD()
 * @method static ServiceCategory OMA_PRESENCE()
 * @method static ServiceCategory PREPAID()
 * @method static ServiceCategory SHARED_CALL_APPEARANCE()
 * @method static ServiceCategory THIRD_PARTY_VOICE_MAIL_SUPPORT()
 * @method static ServiceCategory USER()
 * @method static ServiceCategory VOICE_PORTAL_CALLING()
 * @EnumValueType string
 */
class ServiceCategory extends \MyCLabs\Enum\Enum
{

    const CALL_TRANSFER = 'Call Transfer';

    const CALL_WAITING = 'Call Waiting';

    const CALLING_NAME_RETRIEVAL = 'Calling Name Retrieval';

    const CHARGE_NUMBER = 'Charge Number';

    const EXTERNAL_CALLING_LINE_ID_DELIVERY = 'External Calling Line ID Delivery';

    const GROUP_NIGHT_FORWARDING = 'Group Night Forwarding';

    const INTEGRATED_IMP = 'Integrated IMP';

    const INTERCEPT_GROUP = 'Intercept Group';

    const INTERNAL_CALLING_LINE_ID_DELIVERY = 'Internal Calling Line ID Delivery';

    const MUSIC_ON_HOLD = 'Music On Hold';

    const OMA_PRESENCE = 'OMA Presence';

    const PREPAID = 'Prepaid';

    const SHARED_CALL_APPEARANCE = 'Shared Call Appearance';

    const THIRD_PARTY_VOICE_MAIL_SUPPORT = 'Third-Party Voice Mail Support';

    const USER = 'User';

    const VOICE_PORTAL_CALLING = 'Voice Portal Calling';


}


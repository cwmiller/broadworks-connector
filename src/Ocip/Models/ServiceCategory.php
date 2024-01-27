<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceCategory
 *
 * List of supported Service Categories that have configurable default attributes entries.
 *       The following elements are ignored in AS data mode:
 *          Basic Call Logs
 *          Call Recording
 *          OMA Presence
 *          Push to Talk
 *       The following elements are ignored in XS data mode:
 *          ChargeNumber
 *          Integrated IMP
 *          Voice Portal Calling
 *
 * @method static ServiceCategory BASIC_CALL_LOGS()
 * @method static ServiceCategory CALL_RECORDING()
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
 * @method static ServiceCategory PUSH_TO_TALK()
 * @method static ServiceCategory SHARED_CALL_APPEARANCE()
 * @method static ServiceCategory THIRD_PARTY_VOICE_MAIL_SUPPORT()
 * @method static ServiceCategory USER()
 * @method static ServiceCategory VOICE_PORTAL_CALLING()
 * @EnumValueType string
 */
class ServiceCategory extends \MyCLabs\Enum\Enum
{
    public const BASIC_CALL_LOGS = 'Basic Call Logs';

    public const CALL_RECORDING = 'Call Recording';

    public const CALL_TRANSFER = 'Call Transfer';

    public const CALL_WAITING = 'Call Waiting';

    public const CALLING_NAME_RETRIEVAL = 'Calling Name Retrieval';

    public const CHARGE_NUMBER = 'Charge Number';

    public const EXTERNAL_CALLING_LINE_ID_DELIVERY = 'External Calling Line ID Delivery';

    public const GROUP_NIGHT_FORWARDING = 'Group Night Forwarding';

    public const INTEGRATED_IMP = 'Integrated IMP';

    public const INTERCEPT_GROUP = 'Intercept Group';

    public const INTERNAL_CALLING_LINE_ID_DELIVERY = 'Internal Calling Line ID Delivery';

    public const MUSIC_ON_HOLD = 'Music On Hold';

    public const OMA_PRESENCE = 'OMA Presence';

    public const PREPAID = 'Prepaid';

    public const PUSH_TO_TALK = 'Push to Talk';

    public const SHARED_CALL_APPEARANCE = 'Shared Call Appearance';

    public const THIRD_PARTY_VOICE_MAIL_SUPPORT = 'Third-Party Voice Mail Support';

    public const USER = 'User';

    public const VOICE_PORTAL_CALLING = 'Voice Portal Calling';
}


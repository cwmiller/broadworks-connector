<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MWIDeliveryToMobileEndpointTemplateType23
 *
 * MWI Delivery To Mobile Endpoint template types.
 *
 * @method static MWIDeliveryToMobileEndpointTemplateType23 _DEFAULT()
 * @method static MWIDeliveryToMobileEndpointTemplateType23 SINGLE_NEW_NO_PREVIOUS_MESSAGE()
 * @method static MWIDeliveryToMobileEndpointTemplateType23 SINGLE_NEW_WITH_PREVIOUS_MESSAGE()
 * @method static MWIDeliveryToMobileEndpointTemplateType23 MULTIPLE_NEW_MESSAGES()
 * @method static MWIDeliveryToMobileEndpointTemplateType23 MISSED_CALL_ALERT_FOR_UNCONDITIONAL_VOICE_MAIL_FORWARDING()
 * @method static MWIDeliveryToMobileEndpointTemplateType23 MISSED_CALL_ALERT_FOR_BUSY_VOICE_MAIL_FORWARDING()
 * @method static MWIDeliveryToMobileEndpointTemplateType23 MISSED_CALL_ALERT_FOR_NOT_REACHABLE_VOICE_MAIL_FORWARDING()
 * @method static MWIDeliveryToMobileEndpointTemplateType23 MISSED_CALL_ALERT_FOR_NO_ANSWER_VOICE_MAIL_FORWARDING()
 * @EnumValueType string
 */
class MWIDeliveryToMobileEndpointTemplateType23 extends \MyCLabs\Enum\Enum
{
    public const _DEFAULT = 'Default';

    public const SINGLE_NEW_NO_PREVIOUS_MESSAGE = 'Single New No Previous Message';

    public const SINGLE_NEW_WITH_PREVIOUS_MESSAGE = 'Single New With Previous Message';

    public const MULTIPLE_NEW_MESSAGES = 'Multiple New Messages';

    public const MISSED_CALL_ALERT_FOR_UNCONDITIONAL_VOICE_MAIL_FORWARDING = 'Missed call alert for Unconditional voice mail forwarding';

    public const MISSED_CALL_ALERT_FOR_BUSY_VOICE_MAIL_FORWARDING = 'Missed call alert for Busy voice mail forwarding';

    public const MISSED_CALL_ALERT_FOR_NOT_REACHABLE_VOICE_MAIL_FORWARDING = 'Missed call alert for Not Reachable voice mail forwarding';

    public const MISSED_CALL_ALERT_FOR_NO_ANSWER_VOICE_MAIL_FORWARDING = 'Missed call alert for No Answer voice mail forwarding';
}


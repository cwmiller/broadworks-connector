<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MWIDeliveryToMobileEndpointTemplateTag
 *
 * MWI Delivery To Mobile Endpoint template tag.
 *
 * @method static MWIDeliveryToMobileEndpointTemplateTag VOICE_MAIL_NUMBER()
 * @method static MWIDeliveryToMobileEndpointTemplateTag NEW_MESSAGES_COUNT()
 * @method static MWIDeliveryToMobileEndpointTemplateTag TOTAL_MESSAGES_COUNT()
 * @method static MWIDeliveryToMobileEndpointTemplateTag CALLER_NAME()
 * @method static MWIDeliveryToMobileEndpointTemplateTag CALLER_NUMBER()
 * @EnumValueType string
 */
class MWIDeliveryToMobileEndpointTemplateTag extends \MyCLabs\Enum\Enum
{
    public const VOICE_MAIL_NUMBER = 'Voice Mail Number';

    public const NEW_MESSAGES_COUNT = 'New Messages Count';

    public const TOTAL_MESSAGES_COUNT = 'Total Messages Count';

    public const CALLER_NAME = 'Caller Name';

    public const CALLER_NUMBER = 'Caller Number';
}


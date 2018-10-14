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
 * @ValueType string
 */
class MWIDeliveryToMobileEndpointTemplateTag extends \MyCLabs\Enum\Enum
{

    const VOICE_MAIL_NUMBER = 'Voice Mail Number';

    const NEW_MESSAGES_COUNT = 'New Messages Count';

    const TOTAL_MESSAGES_COUNT = 'Total Messages Count';

    const CALLER_NAME = 'Caller Name';

    const CALLER_NUMBER = 'Caller Number';


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MWIDeliveryToMobileEndpointTemplateType
 *
 * MWI Delivery To Mobile Endpoint template types.
 *
 * @method static MWIDeliveryToMobileEndpointTemplateType _DEFAULT()
 * @method static MWIDeliveryToMobileEndpointTemplateType SINGLE_NEW_NO_PREVIOUS_MESSAGE()
 * @method static MWIDeliveryToMobileEndpointTemplateType SINGLE_NEW_WITH_PREVIOUS_MESSAGE()
 * @method static MWIDeliveryToMobileEndpointTemplateType MULTIPLE_NEW_MESSAGES()
 * @EnumValueType string
 */
class MWIDeliveryToMobileEndpointTemplateType extends \MyCLabs\Enum\Enum
{
    public const _DEFAULT = 'Default';

    public const SINGLE_NEW_NO_PREVIOUS_MESSAGE = 'Single New No Previous Message';

    public const SINGLE_NEW_WITH_PREVIOUS_MESSAGE = 'Single New With Previous Message';

    public const MULTIPLE_NEW_MESSAGES = 'Multiple New Messages';
}


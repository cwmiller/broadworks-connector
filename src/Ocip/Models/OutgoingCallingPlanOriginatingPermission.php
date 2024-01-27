<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanOriginatingPermission
 *
 * Choices indicates how originating calls are permitted.
 *
 * @method static OutgoingCallingPlanOriginatingPermission DISALLOW()
 * @method static OutgoingCallingPlanOriginatingPermission ALLOW()
 * @method static OutgoingCallingPlanOriginatingPermission AUTHORIZATION_CODE_REQUIRED()
 * @method static OutgoingCallingPlanOriginatingPermission TRANSFER_TO_FIRST_TRANSFER_NUMBER()
 * @method static OutgoingCallingPlanOriginatingPermission TRANSFER_TO_SECOND_TRANSFER_NUMBER()
 * @method static OutgoingCallingPlanOriginatingPermission TRANSFER_TO_THIRD_TRANSFER_NUMBER()
 * @EnumValueType string
 */
class OutgoingCallingPlanOriginatingPermission extends \MyCLabs\Enum\Enum
{
    public const DISALLOW = 'Disallow';

    public const ALLOW = 'Allow';

    public const AUTHORIZATION_CODE_REQUIRED = 'Authorization Code Required';

    public const TRANSFER_TO_FIRST_TRANSFER_NUMBER = 'Transfer To First Transfer Number';

    public const TRANSFER_TO_SECOND_TRANSFER_NUMBER = 'Transfer To Second Transfer Number';

    public const TRANSFER_TO_THIRD_TRANSFER_NUMBER = 'Transfer To Third Transfer Number';
}


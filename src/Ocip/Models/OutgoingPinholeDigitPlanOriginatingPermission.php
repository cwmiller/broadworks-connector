<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingPinholeDigitPlanOriginatingPermission
 *
 * Permission choices for Pinhole digit patterns on originating calls.
 *
 * @method static OutgoingPinholeDigitPlanOriginatingPermission IGNORE()
 * @method static OutgoingPinholeDigitPlanOriginatingPermission ALLOW()
 * @method static OutgoingPinholeDigitPlanOriginatingPermission AUTHORIZATION_CODE_REQUIRED()
 * @method static OutgoingPinholeDigitPlanOriginatingPermission TRANSFER_TO_FIRST_TRANSFER_NUMBER()
 * @method static OutgoingPinholeDigitPlanOriginatingPermission TRANSFER_TO_SECOND_TRANSFER_NUMBER()
 * @method static OutgoingPinholeDigitPlanOriginatingPermission TRANSFER_TO_THIRD_TRANSFER_NUMBER()
 * @EnumValueType string
 */
class OutgoingPinholeDigitPlanOriginatingPermission extends \MyCLabs\Enum\Enum
{
    public const IGNORE = 'Ignore';

    public const ALLOW = 'Allow';

    public const AUTHORIZATION_CODE_REQUIRED = 'Authorization Code Required';

    public const TRANSFER_TO_FIRST_TRANSFER_NUMBER = 'Transfer To First Transfer Number';

    public const TRANSFER_TO_SECOND_TRANSFER_NUMBER = 'Transfer To Second Transfer Number';

    public const TRANSFER_TO_THIRD_TRANSFER_NUMBER = 'Transfer To Third Transfer Number';
}


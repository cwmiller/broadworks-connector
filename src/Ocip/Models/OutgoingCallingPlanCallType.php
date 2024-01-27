<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanCallType
 *
 * Outgoing Calling Plan Call Type
 *
 * @method static OutgoingCallingPlanCallType CASUAL_CALLS()
 * @method static OutgoingCallingPlanCallType CHARGEABLE_DIRECTORY_ASSISTANCE()
 * @method static OutgoingCallingPlanCallType INTERNATIONAL()
 * @method static OutgoingCallingPlanCallType LOCAL()
 * @method static OutgoingCallingPlanCallType OPERATOR_ASSISTED()
 * @method static OutgoingCallingPlanCallType PREMIUM_SERVICES_I()
 * @method static OutgoingCallingPlanCallType PREMIUM_SERVICES_II()
 * @method static OutgoingCallingPlanCallType SPECIAL_SERVICES_I()
 * @method static OutgoingCallingPlanCallType SPECIAL_SERVICES_II()
 * @method static OutgoingCallingPlanCallType TOLL()
 * @method static OutgoingCallingPlanCallType TOLL_FREE()
 * @EnumValueType string
 */
class OutgoingCallingPlanCallType extends \MyCLabs\Enum\Enum
{
    public const CASUAL_CALLS = 'Casual Calls';

    public const CHARGEABLE_DIRECTORY_ASSISTANCE = 'Chargeable Directory Assistance';

    public const INTERNATIONAL = 'International';

    public const LOCAL = 'Local';

    public const OPERATOR_ASSISTED = 'Operator Assisted';

    public const PREMIUM_SERVICES_I = 'Premium Services I';

    public const PREMIUM_SERVICES_II = 'Premium Services II';

    public const SPECIAL_SERVICES_I = 'Special Services I';

    public const SPECIAL_SERVICES_II = 'Special Services II';

    public const TOLL = 'Toll';

    public const TOLL_FREE = 'Toll Free';
}


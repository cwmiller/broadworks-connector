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

    const CASUAL_CALLS = 'Casual Calls';

    const CHARGEABLE_DIRECTORY_ASSISTANCE = 'Chargeable Directory Assistance';

    const INTERNATIONAL = 'International';

    const LOCAL = 'Local';

    const OPERATOR_ASSISTED = 'Operator Assisted';

    const PREMIUM_SERVICES_I = 'Premium Services I';

    const PREMIUM_SERVICES_II = 'Premium Services II';

    const SPECIAL_SERVICES_I = 'Special Services I';

    const SPECIAL_SERVICES_II = 'Special Services II';

    const TOLL = 'Toll';

    const TOLL_FREE = 'Toll Free';


}


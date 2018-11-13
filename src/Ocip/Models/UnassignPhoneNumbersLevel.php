<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UnassignPhoneNumbersLevel
 *
 * Indicates whether or not the user's DN(s) should be un-assigned from the group
 * and/or service provider. 
 *         When set to 'Group', the user's primary phone number, fax number and any
 * alternate numbers, will be un-assigned from the group. 
 *         When set to 'Service Provider', they will be un-assigned from the group
 * and service provider. 
 *         When omitted, the DN(s) will be left assigned to the group.
 *
 * @method static UnassignPhoneNumbersLevel GROUP()
 * @method static UnassignPhoneNumbersLevel SERVICE_PROVIDER()
 * @EnumValueType string
 */
class UnassignPhoneNumbersLevel extends \MyCLabs\Enum\Enum
{

    const GROUP = 'Group';

    const SERVICE_PROVIDER = 'Service Provider';


}


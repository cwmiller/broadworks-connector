<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantNameDialingEntry
 *
 * The format callers should use when dialing by name.
 *
 * @method static AutoAttendantNameDialingEntry LASTNAME_FIRSTNAME()
 * @method static AutoAttendantNameDialingEntry LASTNAME_FIRSTNAME_OR_FIRSTNAME_LASTNAME()
 * @EnumValueType string
 */
class AutoAttendantNameDialingEntry extends \MyCLabs\Enum\Enum
{

    const LASTNAME_FIRSTNAME = 'LastName + FirstName';

    const LASTNAME_FIRSTNAME_OR_FIRSTNAME_LASTNAME = 'LastName + FirstName or FirstName + LastName';


}


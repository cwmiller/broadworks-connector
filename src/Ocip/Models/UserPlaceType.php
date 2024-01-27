<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPlaceType
 *
 * Search for user type - 'user' or 'place'. If user type is not 
 *         included, the search looks for ‘both’.
 *
 * @method static UserPlaceType USER()
 * @method static UserPlaceType PLACE()
 * @EnumValueType string
 */
class UserPlaceType extends \MyCLabs\Enum\Enum
{
    public const USER = 'User';

    public const PLACE = 'Place';
}


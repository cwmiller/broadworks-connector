<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupCLIDSourceForScreenedCallsPolicy
 *
 * Trunk Group CLID Source for Screened Trunk Calls Policy.  
 *         "Profile Name Profile Number" indicates CLID uses name and number from
 * screened user profile. 
 *         "Received Name Profile Number" indicates CLID uses name in FROM header
 * and number from screened user profile. 
 *         "Received Name Received Number" indicates CLID uses name and number in
 * FROM header.
 *
 * @method static TrunkGroupCLIDSourceForScreenedCallsPolicy
 * PROFILE_NAME_PROFILE_NUMBER()
 * @method static TrunkGroupCLIDSourceForScreenedCallsPolicy
 * RECEIVED_NAME_PROFILE_NUMBER()
 * @method static TrunkGroupCLIDSourceForScreenedCallsPolicy
 * RECEIVED_NAME_RECEIVED_NUMBER()
 * @EnumValueType string
 */
class TrunkGroupCLIDSourceForScreenedCallsPolicy extends \MyCLabs\Enum\Enum
{

    const PROFILE_NAME_PROFILE_NUMBER = 'Profile Name Profile Number';

    const RECEIVED_NAME_PROFILE_NUMBER = 'Received Name Profile Number';

    const RECEIVED_NAME_RECEIVED_NUMBER = 'Received Name Received Number';


}


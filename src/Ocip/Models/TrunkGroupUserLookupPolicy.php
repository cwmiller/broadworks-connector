<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupUserLookupPolicy
 *
 * Trunk Group User Lookup Policy in performing the trunk group user screening
 * process for a trunk call. 
 *         "Basic" indicates the lookup is performed using FROM header only. 
 *         "Extended" indicates the lookup is performed in the precedence order of
 * P-Preferred-Identity header, 
 *         P-Asserted-Identity header, Remote-Party-ID header, and FROM header.
 *
 * @method static TrunkGroupUserLookupPolicy BASIC()
 * @method static TrunkGroupUserLookupPolicy EXTENDED()
 * @ValueType string
 */
class TrunkGroupUserLookupPolicy extends \MyCLabs\Enum\Enum
{

    const BASIC = 'Basic';

    const EXTENDED = 'Extended';


}


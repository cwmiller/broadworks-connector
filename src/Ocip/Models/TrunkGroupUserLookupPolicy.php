<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupUserLookupPolicy
 *
 * Trunk Group User Lookup Policy in performing the trunk group user screening process for a trunk call. 
 *         "Basic" indicates the lookup is performed using FROM header only. 
 *         "Extended" indicates the lookup is performed in the precedence order of P-Preferred-Identity header, 
 *         P-Asserted-Identity header, Remote-Party-ID header, and FROM header. 
 *         "Basic Lookup Prefer From"
 *
 * @method static TrunkGroupUserLookupPolicy BASIC()
 * @method static TrunkGroupUserLookupPolicy EXTENDED()
 * @method static TrunkGroupUserLookupPolicy BASIC_LOOKUP_PREFER_FROM()
 * @EnumValueType string
 */
class TrunkGroupUserLookupPolicy extends \MyCLabs\Enum\Enum
{

    const BASIC = 'Basic';

    const EXTENDED = 'Extended';

    const BASIC_LOOKUP_PREFER_FROM = 'Basic Lookup Prefer From';


}


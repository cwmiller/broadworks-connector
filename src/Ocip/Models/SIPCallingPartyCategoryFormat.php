<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPCallingPartyCategoryFormat
 *
 * Choices for calling party category format.
 *
 * @method static SIPCallingPartyCategoryFormat CPC()
 * @method static SIPCallingPartyCategoryFormat ISUP_OLI()
 * @method static SIPCallingPartyCategoryFormat CPC_GTD()
 * @EnumValueType string
 */
class SIPCallingPartyCategoryFormat extends \MyCLabs\Enum\Enum
{

    const CPC = 'CPC';

    const ISUP_OLI = 'ISUP OLI';

    const CPC_GTD = 'CPC GTD';


}


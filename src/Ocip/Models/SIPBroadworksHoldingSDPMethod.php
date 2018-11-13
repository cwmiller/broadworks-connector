<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPBroadworksHoldingSDPMethod
 *
 * Choices for BroadWorks Holding SDP Method
 *
 * @method static SIPBroadworksHoldingSDPMethod HOLD_SDP()
 * @method static SIPBroadworksHoldingSDPMethod MODIFIED_ADDRESS_SDP()
 * @EnumValueType string
 */
class SIPBroadworksHoldingSDPMethod extends \MyCLabs\Enum\Enum
{

    const HOLD_SDP = 'Hold SDP';

    const MODIFIED_ADDRESS_SDP = 'Modified Address SDP';


}


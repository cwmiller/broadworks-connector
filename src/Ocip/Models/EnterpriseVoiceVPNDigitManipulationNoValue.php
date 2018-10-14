<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNDigitManipulationNoValue
 *
 * Enterprise Voice VPN Digit Manipulation Entry that has no value.
 */
class EnterpriseVoiceVPNDigitManipulationNoValue extends EnterpriseVoiceVPNDigitManipulation
{

    /**
     * @ElementName operation
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationNoValue|null
     */
    private $operation = null;

    /**
     * Getter for operation
     *
     * @ElementName operation
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationNoValue|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Setter for operation
     *
     * @ElementName operation
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationNoValue|null $operation
     * @return $this
     */
    public function setOperation(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationNoValue $operation)
    {
        $this->operation = $operation;
        return $this;
    }


}


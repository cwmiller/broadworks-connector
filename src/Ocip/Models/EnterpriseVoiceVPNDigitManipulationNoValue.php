<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNDigitManipulationNoValue
 *
 * Enterprise Voice VPN Digit Manipulation Entry that has no value.
 *
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:1269","type":"sequence"}]
 */
class EnterpriseVoiceVPNDigitManipulationNoValue extends EnterpriseVoiceVPNDigitManipulation
{
    /**
     * @ElementName operation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationNoValue
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1269
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationNoValue|null
     */
    protected $operation = null;

    /**
     * Getter for operation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationNoValue
     */
    public function getOperation()
    {
        return $this->operation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->operation;
    }

    /**
     * Setter for operation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationNoValue $operation
     * @return $this
     */
    public function setOperation(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationNoValue $operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOperation()
    {
        $this->operation = null;
        return $this;
    }
}


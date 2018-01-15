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
     * @var string|null
     */
    private $operation = null;

    /**
     * Getter for operation
     *
     * @ElementName operation
     * @return string|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Setter for operation
     *
     * @ElementName operation
     * @param string|null $operation
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }


}


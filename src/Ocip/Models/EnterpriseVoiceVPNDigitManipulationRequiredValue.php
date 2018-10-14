<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNDigitManipulationRequiredValue
 *
 * Enterprise Voice VPN Digit Manipulation Entry that has a value.
 */
class EnterpriseVoiceVPNDigitManipulationRequiredValue extends EnterpriseVoiceVPNDigitManipulation
{

    /**
     * @ElementName operation
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationRequiredValue|null
     */
    private $operation = null;

    /**
     * @ElementName value
     * @var string|null
     */
    private $value = null;

    /**
     * Getter for operation
     *
     * @ElementName operation
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationRequiredValue|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Setter for operation
     *
     * @ElementName operation
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationRequiredValue|null $operation
     * @return $this
     */
    public function setOperation(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationRequiredValue $operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Getter for value
     *
     * @ElementName value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Setter for value
     *
     * @ElementName value
     * @param string|null $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}


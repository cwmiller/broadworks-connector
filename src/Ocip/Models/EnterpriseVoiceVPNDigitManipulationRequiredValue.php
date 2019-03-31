<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNDigitManipulationRequiredValue
 *
 * Enterprise Voice VPN Digit Manipulation Entry that has a value.
 *
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:1639","type":"sequence"}]
 */
class EnterpriseVoiceVPNDigitManipulationRequiredValue extends EnterpriseVoiceVPNDigitManipulation
{

    /**
     * @ElementName operation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationRequiredValue
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1639
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationRequiredValue|null
     */
    private $operation = null;

    /**
     * @ElementName value
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1639
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $value = null;

    /**
     * Getter for operation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationRequiredValue
     */
    public function getOperation()
    {
        return $this->operation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->operation;
    }

    /**
     * Setter for operation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationRequiredValue $operation
     * @return $this
     */
    public function setOperation(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationRequiredValue $operation)
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

    /**
     * Getter for value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->value;
    }

    /**
     * Setter for value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetValue()
    {
        $this->value = null;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNDigitManipulationOptionalValue
 *
 * Enterprise Voice VPN Digit Manipulation Entry that optionally has a value.
 *
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:1284","type":"sequence"}]
 */
class EnterpriseVoiceVPNDigitManipulationOptionalValue extends EnterpriseVoiceVPNDigitManipulation
{
    /**
     * @ElementName operation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationOptionalValue
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1284
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationOptionalValue|null
     */
    protected $operation = null;

    /**
     * @ElementName value
     * @Type string
     * @Nillable
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1284
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $value = null;

    /**
     * Getter for operation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationOptionalValue
     */
    public function getOperation()
    {
        return $this->operation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->operation;
    }

    /**
     * Setter for operation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationOptionalValue $operation
     * @return $this
     */
    public function setOperation(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperationOptionalValue $operation)
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
     * @return string|null
     */
    public function getValue()
    {
        return $this->value instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->value;
    }

    /**
     * Setter for value
     *
     * @param string|null $value
     * @return $this
     */
    public function setValue($value = null)
    {
        if ($value === null) {
            $this->value = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->value = $value;
        }
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


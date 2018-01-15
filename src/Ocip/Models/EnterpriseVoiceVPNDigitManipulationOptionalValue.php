<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNDigitManipulationOptionalValue
 *
 * Enterprise Voice VPN Digit Manipulation Entry that optionally has a value.
 */
class EnterpriseVoiceVPNDigitManipulationOptionalValue extends EnterpriseVoiceVPNDigitManipulation
{

    /**
     * @ElementName operation
     * @var string|null
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


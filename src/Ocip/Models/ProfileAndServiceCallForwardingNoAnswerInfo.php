<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceCallForwardingNoAnswerInfo
 *
 * This is the configuration parameters for Call Forwarding No Answer service
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4285","type":"sequence"}]
 */
class ProfileAndServiceCallForwardingNoAnswerInfo
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4285
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4285
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $forwardToPhoneNumber = null;

    /**
     * @ElementName numberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallForwardingNoAnswerNumberOfRings
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4285
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallForwardingNoAnswerNumberOfRings|null
     */
    protected $numberOfRings = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for forwardToPhoneNumber
     *
     * @return string
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @param string $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $this->forwardToPhoneNumber = $forwardToPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardToPhoneNumber()
    {
        $this->forwardToPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for numberOfRings
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallForwardingNoAnswerNumberOfRings
     */
    public function getNumberOfRings()
    {
        return $this->numberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfRings;
    }

    /**
     * Setter for numberOfRings
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallForwardingNoAnswerNumberOfRings $numberOfRings
     * @return $this
     */
    public function setNumberOfRings(\CWM\BroadWorksConnector\Ocip\Models\CallForwardingNoAnswerNumberOfRings $numberOfRings)
    {
        $this->numberOfRings = $numberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfRings()
    {
        $this->numberOfRings = null;
        return $this;
    }
}


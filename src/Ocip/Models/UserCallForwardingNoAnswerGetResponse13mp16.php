<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingNoAnswerGetResponse13mp16
 *
 * Response to UserCallForwardingNoAnswerGetRequest13mp16.
 *
 * @see UserCallForwardingNoAnswerGetRequest13mp16
 * @Groups [{"id":"9bba36247a6338c8a1cff754a22a6c6b:59","type":"sequence"}]
 */
class UserCallForwardingNoAnswerGetResponse13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 9bba36247a6338c8a1cff754a22a6c6b:59
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group 9bba36247a6338c8a1cff754a22a6c6b:59
     * @var string|null
     */
    private $forwardToPhoneNumber = null;

    /**
     * @ElementName numberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallForwardingNoAnswerNumberOfRings
     * @Group 9bba36247a6338c8a1cff754a22a6c6b:59
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallForwardingNoAnswerNumberOfRings|null
     */
    private $numberOfRings = null;

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


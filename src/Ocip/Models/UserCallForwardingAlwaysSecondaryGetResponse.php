<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingAlwaysSecondaryGetResponse
 *
 * Response to UserCallForwardingAlwaysSecondaryGetRequest.
 *
 * @see UserCallForwardingAlwaysSecondaryGetRequest
 */
class UserCallForwardingAlwaysSecondaryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @var string|null
     */
    private $forwardToPhoneNumber = null;

    /**
     * @ElementName isRingSplashActive
     * @Type bool
     * @var bool|null
     */
    private $isRingSplashActive = null;

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
     * Getter for isRingSplashActive
     *
     * @return bool
     */
    public function getIsRingSplashActive()
    {
        return $this->isRingSplashActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isRingSplashActive;
    }

    /**
     * Setter for isRingSplashActive
     *
     * @param bool $isRingSplashActive
     * @return $this
     */
    public function setIsRingSplashActive($isRingSplashActive)
    {
        $this->isRingSplashActive = $isRingSplashActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsRingSplashActive()
    {
        $this->isRingSplashActive = null;
        return $this;
    }


}


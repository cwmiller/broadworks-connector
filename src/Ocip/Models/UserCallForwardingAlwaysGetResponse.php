<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingAlwaysGetResponse
 *
 * Response to UserCallForwardingAlwaysGetRequest.
 *
 * @see UserCallForwardingAlwaysGetRequest
 * @Groups [{"id":"c6e8b321b24b0bc38cc20e79ffb96700:59","type":"sequence"}]
 */
class UserCallForwardingAlwaysGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group c6e8b321b24b0bc38cc20e79ffb96700:59
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group c6e8b321b24b0bc38cc20e79ffb96700:59
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $forwardToPhoneNumber = null;

    /**
     * @ElementName isRingSplashActive
     * @Type bool
     * @Group c6e8b321b24b0bc38cc20e79ffb96700:59
     * @var bool|null
     */
    protected $isRingSplashActive = null;

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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingNotReachableGetResponse
 *
 * Response to UserCallForwardingNotReachableGetRequest.
 *
 * @see UserCallForwardingNotReachableGetRequest
 * @Groups [{"id":"ecab73b10002a8439d3bb81c5ea9e62c:59","type":"sequence"}]
 */
class UserCallForwardingNotReachableGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group ecab73b10002a8439d3bb81c5ea9e62c:59
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group ecab73b10002a8439d3bb81c5ea9e62c:59
     * @var string|null
     */
    private $forwardToPhoneNumber = null;

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


}


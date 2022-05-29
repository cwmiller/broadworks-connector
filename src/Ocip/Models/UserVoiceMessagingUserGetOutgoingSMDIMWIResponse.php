<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetOutgoingSMDIMWIResponse
 *
 * Response to the UserVoiceMessagingUserGetOutgoingSMDIMWIRequest.
 *
 * @see UserVoiceMessagingUserGetOutgoingSMDIMWIRequest
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:1872","type":"sequence"}]
 */
class UserVoiceMessagingUserGetOutgoingSMDIMWIResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1872
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName outgoingSMDIMWIPhoneNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1872
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $outgoingSMDIMWIPhoneNumber = array(
        
    );

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
     * Getter for outgoingSMDIMWIPhoneNumber
     *
     * @return string[]
     */
    public function getOutgoingSMDIMWIPhoneNumber()
    {
        return $this->outgoingSMDIMWIPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outgoingSMDIMWIPhoneNumber;
    }

    /**
     * Setter for outgoingSMDIMWIPhoneNumber
     *
     * @param string[] $outgoingSMDIMWIPhoneNumber
     * @return $this
     */
    public function setOutgoingSMDIMWIPhoneNumber(array $outgoingSMDIMWIPhoneNumber)
    {
        $this->outgoingSMDIMWIPhoneNumber = $outgoingSMDIMWIPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutgoingSMDIMWIPhoneNumber()
    {
        $this->outgoingSMDIMWIPhoneNumber = null;
        return $this;
    }

    /**
     * Adder for outgoingSMDIMWIPhoneNumber
     *
     * @param string $outgoingSMDIMWIPhoneNumber
     * @return $this
     */
    public function addOutgoingSMDIMWIPhoneNumber(string $outgoingSMDIMWIPhoneNumber)
    {
        $this->outgoingSMDIMWIPhoneNumber[] = $outgoingSMDIMWIPhoneNumber;
        return $this;
    }


}


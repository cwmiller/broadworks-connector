<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetOutgoingSMDIMWIResponse
 *
 * Response to the UserVoiceMessagingUserGetOutgoingSMDIMWIRequest.
 */
class UserVoiceMessagingUserGetOutgoingSMDIMWIResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName outgoingSMDIMWIPhoneNumber
     * @var string[]
     */
    private $outgoingSMDIMWIPhoneNumber = array(
        
    );

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for outgoingSMDIMWIPhoneNumber
     *
     * @ElementName outgoingSMDIMWIPhoneNumber
     * @return string[]
     */
    public function getOutgoingSMDIMWIPhoneNumber()
    {
        return $this->outgoingSMDIMWIPhoneNumber;
    }

    /**
     * Setter for outgoingSMDIMWIPhoneNumber
     *
     * @ElementName outgoingSMDIMWIPhoneNumber
     * @param string[] $outgoingSMDIMWIPhoneNumber
     * @return $this
     */
    public function setOutgoingSMDIMWIPhoneNumber($outgoingSMDIMWIPhoneNumber)
    {
        $this->outgoingSMDIMWIPhoneNumber = $outgoingSMDIMWIPhoneNumber;
        return $this;
    }

    /**
     * Adder for outgoingSMDIMWIPhoneNumber
     *
     * @ElementName outgoingSMDIMWIPhoneNumber
     * @param string $outgoingSMDIMWIPhoneNumber
     * @return $this
     */
    public function addOutgoingSMDIMWIPhoneNumber($outgoingSMDIMWIPhoneNumber)
    {
        $this->outgoingSMDIMWIPhoneNumber []= $outgoingSMDIMWIPhoneNumber;
        return $this;
    }


}


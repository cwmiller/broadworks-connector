<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetResponse
 *
 * Response to the UserSimultaneousRingFamilyGetRequest.
 *         Replaced By: UserSimultaneousRingFamilyGetResponse14sp4
 */
class UserSimultaneousRingFamilyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName incomingCalls
     * @var string|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName simRingPhoneNumber
     * @var string[]
     */
    private $simRingPhoneNumber = array(
        
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
     * Getter for incomingCalls
     *
     * @ElementName incomingCalls
     * @return string|null
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @ElementName incomingCalls
     * @param string|null $incomingCalls
     * @return $this
     */
    public function setIncomingCalls($incomingCalls)
    {
        $this->incomingCalls = $incomingCalls;
        return $this;
    }

    /**
     * Getter for simRingPhoneNumber
     *
     * @ElementName simRingPhoneNumber
     * @return string[]
     */
    public function getSimRingPhoneNumber()
    {
        return $this->simRingPhoneNumber;
    }

    /**
     * Setter for simRingPhoneNumber
     *
     * @ElementName simRingPhoneNumber
     * @param string[] $simRingPhoneNumber
     * @return $this
     */
    public function setSimRingPhoneNumber($simRingPhoneNumber)
    {
        $this->simRingPhoneNumber = $simRingPhoneNumber;
        return $this;
    }

    /**
     * Adder for simRingPhoneNumber
     *
     * @ElementName simRingPhoneNumber
     * @param string $simRingPhoneNumber
     * @return $this
     */
    public function addSimRingPhoneNumber($simRingPhoneNumber)
    {
        $this->simRingPhoneNumber []= $simRingPhoneNumber;
        return $this;
    }


}


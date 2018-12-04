<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingPersonalGetResponse
 *
 * Response to the UserSimultaneousRingPersonalGetRequest.
 *         Replaced By: UserSimultaneousRingPersonalGetResponse14sp4
 *
 * @see UserSimultaneousRingPersonalGetRequest
 * @see UserSimultaneousRingPersonalGetResponse14sp4
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:37435","type":"sequence"}]
 */
class UserSimultaneousRingPersonalGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:37435
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName incomingCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection
     * @Group 1a79c7896cb04feac6eff47a5321756e:37435
     * @var \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName simRingPhoneNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:37435
     * @var string[]
     */
    private $simRingPhoneNumber = array(
        
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
     * Getter for incomingCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection $incomingCalls
     * @return $this
     */
    public function setIncomingCalls(\CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection $incomingCalls)
    {
        $this->incomingCalls = $incomingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingCalls()
    {
        $this->incomingCalls = null;
        return $this;
    }

    /**
     * Getter for simRingPhoneNumber
     *
     * @return string[]
     */
    public function getSimRingPhoneNumber()
    {
        return $this->simRingPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->simRingPhoneNumber;
    }

    /**
     * Setter for simRingPhoneNumber
     *
     * @param string[] $simRingPhoneNumber
     * @return $this
     */
    public function setSimRingPhoneNumber(array $simRingPhoneNumber)
    {
        $this->simRingPhoneNumber = $simRingPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSimRingPhoneNumber()
    {
        $this->simRingPhoneNumber = null;
        return $this;
    }

    /**
     * Adder for simRingPhoneNumber
     *
     * @param string $simRingPhoneNumber
     * @return $this
     */
    public function addSimRingPhoneNumber(string $simRingPhoneNumber)
    {
        $this->simRingPhoneNumber[] = $simRingPhoneNumber;
        return $this;
    }


}


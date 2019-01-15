<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingPersonalModifyRequest17
 *
 * Modify the user's simultaneous ring personal service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f64c4e06b22d19cc74a21048a08a84c7:177","type":"sequence"}]
 */
class UserSimultaneousRingPersonalModifyRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f64c4e06b22d19cc74a21048a08a84c7:177
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group f64c4e06b22d19cc74a21048a08a84c7:177
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName doNotRingIfOnCall
     * @Type bool
     * @Optional
     * @Group f64c4e06b22d19cc74a21048a08a84c7:177
     * @var bool|null
     */
    private $doNotRingIfOnCall = null;

    /**
     * @ElementName simultaneousRingNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingReplacementNumberList
     * @Nillable
     * @Optional
     * @Group f64c4e06b22d19cc74a21048a08a84c7:177
     * @var \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingReplacementNumberList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $simultaneousRingNumberList = null;

    /**
     * @ElementName criteriaActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation
     * @Array
     * @Optional
     * @Group f64c4e06b22d19cc74a21048a08a84c7:177
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    private $criteriaActivation = array(
        
    );

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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
     * Getter for doNotRingIfOnCall
     *
     * @return bool
     */
    public function getDoNotRingIfOnCall()
    {
        return $this->doNotRingIfOnCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->doNotRingIfOnCall;
    }

    /**
     * Setter for doNotRingIfOnCall
     *
     * @param bool $doNotRingIfOnCall
     * @return $this
     */
    public function setDoNotRingIfOnCall($doNotRingIfOnCall)
    {
        $this->doNotRingIfOnCall = $doNotRingIfOnCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDoNotRingIfOnCall()
    {
        $this->doNotRingIfOnCall = null;
        return $this;
    }

    /**
     * Getter for simultaneousRingNumberList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingReplacementNumberList|null
     */
    public function getSimultaneousRingNumberList()
    {
        return $this->simultaneousRingNumberList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->simultaneousRingNumberList;
    }

    /**
     * Setter for simultaneousRingNumberList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingReplacementNumberList|null $simultaneousRingNumberList
     * @return $this
     */
    public function setSimultaneousRingNumberList(\CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingReplacementNumberList $simultaneousRingNumberList = null)
    {
        if ($simultaneousRingNumberList === null) {
            $this->simultaneousRingNumberList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->simultaneousRingNumberList = $simultaneousRingNumberList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSimultaneousRingNumberList()
    {
        $this->simultaneousRingNumberList = null;
        return $this;
    }

    /**
     * Getter for criteriaActivation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaActivation;
    }

    /**
     * Setter for criteriaActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[] $criteriaActivation
     * @return $this
     */
    public function setCriteriaActivation(array $criteriaActivation)
    {
        $this->criteriaActivation = $criteriaActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaActivation()
    {
        $this->criteriaActivation = null;
        return $this;
    }

    /**
     * Adder for criteriaActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation $criteriaActivation
     * @return $this
     */
    public function addCriteriaActivation($criteriaActivation)
    {
        $this->criteriaActivation[] = $criteriaActivation;
        return $this;
    }


}


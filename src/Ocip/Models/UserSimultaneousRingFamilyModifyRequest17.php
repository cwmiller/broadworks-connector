<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyModifyRequest17
 *
 * Modify the user's simultaneous ring family service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7829cd70c5c6e02768e0a59a5de29efe:177","type":"sequence"}]
 */
class UserSimultaneousRingFamilyModifyRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 7829cd70c5c6e02768e0a59a5de29efe:177
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 7829cd70c5c6e02768e0a59a5de29efe:177
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName doNotRingIfOnCall
     * @Type bool
     * @Optional
     * @Group 7829cd70c5c6e02768e0a59a5de29efe:177
     * @var bool|null
     */
    protected $doNotRingIfOnCall = null;

    /**
     * @ElementName simultaneousRingNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingReplacementNumberList
     * @Nillable
     * @Optional
     * @Group 7829cd70c5c6e02768e0a59a5de29efe:177
     * @var \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingReplacementNumberList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $simultaneousRingNumberList = null;

    /**
     * @ElementName criteriaActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation
     * @Array
     * @Optional
     * @Group 7829cd70c5c6e02768e0a59a5de29efe:177
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    protected $criteriaActivation = [
        
    ];

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


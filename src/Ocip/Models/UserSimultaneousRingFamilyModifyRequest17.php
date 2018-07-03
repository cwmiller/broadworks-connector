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
 */
class UserSimultaneousRingFamilyModifyRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName doNotRingIfOnCall
     * @var bool|null
     */
    private $doNotRingIfOnCall = null;

    /**
     * @ElementName simultaneousRingNumberList
     * @var \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingReplacementNumberList|null
     */
    private $simultaneousRingNumberList = null;

    /**
     * @ElementName criteriaActivation
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    private $criteriaActivation = array(
        
    );

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

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
     * Getter for doNotRingIfOnCall
     *
     * @ElementName doNotRingIfOnCall
     * @return bool|null
     */
    public function getDoNotRingIfOnCall()
    {
        return $this->doNotRingIfOnCall;
    }

    /**
     * Setter for doNotRingIfOnCall
     *
     * @ElementName doNotRingIfOnCall
     * @param bool|null $doNotRingIfOnCall
     * @return $this
     */
    public function setDoNotRingIfOnCall($doNotRingIfOnCall)
    {
        $this->doNotRingIfOnCall = $doNotRingIfOnCall;
        return $this;
    }

    /**
     * Getter for simultaneousRingNumberList
     *
     * @ElementName simultaneousRingNumberList
     * @return \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingReplacementNumberList|null
     */
    public function getSimultaneousRingNumberList()
    {
        return $this->simultaneousRingNumberList;
    }

    /**
     * Setter for simultaneousRingNumberList
     *
     * @ElementName simultaneousRingNumberList
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingReplacementNumberList|null $simultaneousRingNumberList
     * @return $this
     */
    public function setSimultaneousRingNumberList($simultaneousRingNumberList)
    {
        $this->simultaneousRingNumberList = $simultaneousRingNumberList;
        return $this;
    }

    /**
     * Getter for criteriaActivation
     *
     * @ElementName criteriaActivation
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation;
    }

    /**
     * Setter for criteriaActivation
     *
     * @ElementName criteriaActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[] $criteriaActivation
     * @return $this
     */
    public function setCriteriaActivation($criteriaActivation)
    {
        $this->criteriaActivation = $criteriaActivation;
        return $this;
    }

    /**
     * Adder for criteriaActivation
     *
     * @ElementName criteriaActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation $criteriaActivation
     * @return $this
     */
    public function addCriteriaActivation($criteriaActivation)
    {
        $this->criteriaActivation []= $criteriaActivation;
        return $this;
    }


}


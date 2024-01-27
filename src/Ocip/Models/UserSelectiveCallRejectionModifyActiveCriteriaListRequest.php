<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSelectiveCallRejectionModifyActiveCriteriaListRequest
 *
 * Activate the user's selective call rejection criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b3553d7704f59ff8de2f730be450316f:175","type":"sequence"}]
 */
class UserSelectiveCallRejectionModifyActiveCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group b3553d7704f59ff8de2f730be450316f:175
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName criteriaActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation
     * @Array
     * @Optional
     * @Group b3553d7704f59ff8de2f730be450316f:175
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


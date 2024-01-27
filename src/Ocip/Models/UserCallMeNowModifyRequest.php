<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowModifyRequest
 *
 * Modify the user's call me now service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"adf9583170c1dc9ec6c152ba1238437a:223","type":"sequence"}]
 */
class UserCallMeNowModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group adf9583170c1dc9ec6c152ba1238437a:223
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group adf9583170c1dc9ec6c152ba1238437a:223
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName answerConfirmation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallMeNowAnswerConfirmation
     * @Optional
     * @Group adf9583170c1dc9ec6c152ba1238437a:223
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallMeNowAnswerConfirmation|null
     */
    protected $answerConfirmation = null;

    /**
     * @ElementName criteriaActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation
     * @Array
     * @Optional
     * @Group adf9583170c1dc9ec6c152ba1238437a:223
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
     * Getter for answerConfirmation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallMeNowAnswerConfirmation
     */
    public function getAnswerConfirmation()
    {
        return $this->answerConfirmation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->answerConfirmation;
    }

    /**
     * Setter for answerConfirmation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallMeNowAnswerConfirmation $answerConfirmation
     * @return $this
     */
    public function setAnswerConfirmation(\CWM\BroadWorksConnector\Ocip\Models\CallMeNowAnswerConfirmation $answerConfirmation)
    {
        $this->answerConfirmation = $answerConfirmation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnswerConfirmation()
    {
        $this->answerConfirmation = null;
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


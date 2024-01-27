<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallNotifyModifyRequest
 *
 * Modify the user's call notify service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ec1be3ca6e990aac87b6fcf39d5e3445:301","type":"sequence"}]
 */
class UserCallNotifyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group ec1be3ca6e990aac87b6fcf39d5e3445:301
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName callNotifyEmailAddress
     * @Type string
     * @Optional
     * @Group ec1be3ca6e990aac87b6fcf39d5e3445:301
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $callNotifyEmailAddress = null;

    /**
     * @ElementName criteriaActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation
     * @Array
     * @Optional
     * @Group ec1be3ca6e990aac87b6fcf39d5e3445:301
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
     * Getter for callNotifyEmailAddress
     *
     * @return string
     */
    public function getCallNotifyEmailAddress()
    {
        return $this->callNotifyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callNotifyEmailAddress;
    }

    /**
     * Setter for callNotifyEmailAddress
     *
     * @param string $callNotifyEmailAddress
     * @return $this
     */
    public function setCallNotifyEmailAddress($callNotifyEmailAddress)
    {
        $this->callNotifyEmailAddress = $callNotifyEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallNotifyEmailAddress()
    {
        $this->callNotifyEmailAddress = null;
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


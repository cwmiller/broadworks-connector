<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereDeleteSelectiveCriteriaRequest
 *
 * Delete a criteria from the user's BroadWorks Anywhere phone number.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksAnywhereDeleteSelectiveCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName criteriaName
     * @var string|null
     */
    private $criteriaName = null;

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
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for criteriaName
     *
     * @ElementName criteriaName
     * @return string|null
     */
    public function getCriteriaName()
    {
        return $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @ElementName criteriaName
     * @param string|null $criteriaName
     * @return $this
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }


}


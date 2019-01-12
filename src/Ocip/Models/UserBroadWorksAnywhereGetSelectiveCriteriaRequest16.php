<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetSelectiveCriteriaRequest16
 *
 * Get a criteria for the user's BroadWorks Anywhere phone number.
 *         The response is either a UserBroadWorksAnywhereGetSelectiveCriteriaResponse16 or an ErrorResponse.
 *         Replaced by: UserBroadWorksAnywhereGetSelectiveCriteriaRequest21 in AS data mode
 *
 * @see UserBroadWorksAnywhereGetSelectiveCriteriaResponse16
 * @see ErrorResponse
 * @see UserBroadWorksAnywhereGetSelectiveCriteriaRequest21
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:3382","type":"sequence"}]
 */
class UserBroadWorksAnywhereGetSelectiveCriteriaRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:3382
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:3382
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:3382
     * @var string|null
     */
    private $criteriaName = null;

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
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for criteriaName
     *
     * @return string
     */
    public function getCriteriaName()
    {
        return $this->criteriaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @param string $criteriaName
     * @return $this
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaName()
    {
        $this->criteriaName = null;
        return $this;
    }


}


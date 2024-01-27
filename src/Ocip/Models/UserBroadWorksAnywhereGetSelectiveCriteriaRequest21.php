<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetSelectiveCriteriaRequest21
 *
 * Get a criteria for the user's BroadWorks Anywhere phone number.
 *         The response is either a UserBroadWorksAnywhereGetSelectiveCriteriaResponse21 or an ErrorResponse.
 *
 * @see UserBroadWorksAnywhereGetSelectiveCriteriaResponse21
 * @see ErrorResponse
 * @Groups [{"id":"f39163d0e42e05c4a1692a62f625df9f:519","type":"sequence"}]
 */
class UserBroadWorksAnywhereGetSelectiveCriteriaRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group f39163d0e42e05c4a1692a62f625df9f:519
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group f39163d0e42e05c4a1692a62f625df9f:519
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $phoneNumber = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group f39163d0e42e05c4a1692a62f625df9f:519
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $criteriaName = null;

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


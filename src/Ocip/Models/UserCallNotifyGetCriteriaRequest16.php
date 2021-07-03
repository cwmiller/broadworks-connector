<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallNotifyGetCriteriaRequest16
 *
 * Get a criteria for the user's call notify service.
 *         The response is either a UserCallNotifyGetCriteriaResponse16 or an ErrorResponse.
 *         Replaced by: UserCallNotifyGetCriteriaRequest21 in AS data mode
 *
 * @see UserCallNotifyGetCriteriaResponse16
 * @see ErrorResponse
 * @see UserCallNotifyGetCriteriaRequest21
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:12684","type":"sequence"}]
 */
class UserCallNotifyGetCriteriaRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:12684
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:12684
     * @MinLength 1
     * @MaxLength 50
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


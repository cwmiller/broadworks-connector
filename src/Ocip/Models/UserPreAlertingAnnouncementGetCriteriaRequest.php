<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreAlertingAnnouncementGetCriteriaRequest
 *
 * Get a criteria for the user's pre-alerting service.
 *         The response is either a UserPreAlertingAnnouncementGetCriteriaResponse or an ErrorResponse.
 *         Replaced by: UserPreAlertingAnnouncementGetCriteriaRequest21 in AS data mode
 *
 * @see UserPreAlertingAnnouncementGetCriteriaResponse
 * @see ErrorResponse
 * @see UserPreAlertingAnnouncementGetCriteriaRequest21
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:14013","type":"sequence"}]
 */
class UserPreAlertingAnnouncementGetCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:14013
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:14013
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


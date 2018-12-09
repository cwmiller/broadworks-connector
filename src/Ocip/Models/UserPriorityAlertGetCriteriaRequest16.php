<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPriorityAlertGetCriteriaRequest16
 *
 * Get a criteria for the user's priority alert service.
 *         The response is either a UserPriorityAlertGetCriteriaResponse16 or an ErrorResponse.
 *         Replaced by: UserPriorityAlertGetCriteriaRequest21 in AS data mode
 *
 * @see UserPriorityAlertGetCriteriaResponse16
 * @see ErrorResponse
 * @see UserPriorityAlertGetCriteriaRequest21
 * @Groups [{"id":"bb12a3589ab4748963f28f7ac9310f70:5425","type":"sequence"}]
 */
class UserPriorityAlertGetCriteriaRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group bb12a3589ab4748963f28f7ac9310f70:5425
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group bb12a3589ab4748963f28f7ac9310f70:5425
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


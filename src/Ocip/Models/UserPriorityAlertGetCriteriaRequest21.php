<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPriorityAlertGetCriteriaRequest21
 *
 * Get a criteria for the user's priority alert service.
 *         The response is either a UserPriorityAlertGetCriteriaResponse21 or an ErrorResponse.
 *
 * @see UserPriorityAlertGetCriteriaResponse21
 * @see ErrorResponse
 * @Groups [{"id":"48b0abc609ecbfab1fb1ee61c1de62ea:134","type":"sequence"}]
 */
class UserPriorityAlertGetCriteriaRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 48b0abc609ecbfab1fb1ee61c1de62ea:134
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group 48b0abc609ecbfab1fb1ee61c1de62ea:134
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


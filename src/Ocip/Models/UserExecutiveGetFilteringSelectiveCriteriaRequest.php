<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetFilteringSelectiveCriteriaRequest
 *
 * Get a filtering criteria for an executive user.
 *         Both executive and the executive assistant can run this command.
 *         The response is either UserExecutiveGetSelectiveCriteriaResponse or ErrorResponse.
 *         Replaced by: UserExecutiveGetFilteringSelectiveCriteriaRequest21
 *
 * @see UserExecutiveGetSelectiveCriteriaResponse
 * @see ErrorResponse
 * @see UserExecutiveGetFilteringSelectiveCriteriaRequest21
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:34516","type":"sequence"}]
 */
class UserExecutiveGetFilteringSelectiveCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:34516
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:34516
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSelectiveCallRejectionDeleteCriteriaRequest
 *
 * Delete a criteria from the user's selective call rejection service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b3553d7704f59ff8de2f730be450316f:73","type":"sequence"}]
 */
class UserSelectiveCallRejectionDeleteCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group b3553d7704f59ff8de2f730be450316f:73
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group b3553d7704f59ff8de2f730be450316f:73
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


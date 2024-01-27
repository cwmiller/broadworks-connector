<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSelectiveCallRejectionGetCriteriaRequest16sp1
 *
 * Get a criteria for the user's selective call rejection service.
 *         The response is either a UserSelectiveCallRejectionGetCriteriaResponse16sp1 or an ErrorResponse.
 *         Replaced by: UserSelectiveCallRejectionGetCriteriaRequest21 in AS data mode
 *
 * @see UserSelectiveCallRejectionGetCriteriaResponse16sp1
 * @see ErrorResponse
 * @see UserSelectiveCallRejectionGetCriteriaRequest21
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:18716","type":"sequence"}]
 */
class UserSelectiveCallRejectionGetCriteriaRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:18716
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:18716
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


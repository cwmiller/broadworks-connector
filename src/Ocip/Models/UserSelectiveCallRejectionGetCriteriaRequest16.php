<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSelectiveCallRejectionGetCriteriaRequest16
 *
 * Get a criteria for the user's selective call rejection service.
 *         The response is either a UserSelectiveCallRejectionGetCriteriaResponse16 or an ErrorResponse.
 *         Replaced by: UserSelectiveCallRejectionGetCriteriaRequest16sp1
 *
 * @see UserSelectiveCallRejectionGetCriteriaResponse16
 * @see ErrorResponse
 * @see UserSelectiveCallRejectionGetCriteriaRequest16sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46795","type":"sequence"}]
 */
class UserSelectiveCallRejectionGetCriteriaRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:46795
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:46795
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


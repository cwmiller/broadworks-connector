<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSelectiveCallRejectionGetCriteriaListRequest
 *
 * Get the user's selective call rejection criteria listing.
 *         The response is either a UserSelectiveCallRejectionGetCriteriaListResponse or an ErrorResponse.
 *
 * @see UserSelectiveCallRejectionGetCriteriaListResponse
 * @see ErrorResponse
 * @Groups [{"id":"b3553d7704f59ff8de2f730be450316f:90","type":"sequence"}]
 */
class UserSelectiveCallRejectionGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group b3553d7704f59ff8de2f730be450316f:90
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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
}


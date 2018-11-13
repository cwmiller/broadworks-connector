<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPriorityAlertGetCriteriaListRequest
 *
 * Get the user's priority alert criteria listing.
 *         The response is either a UserPriorityAlertGetCriteriaListResponse or an
 * ErrorResponse.
 *
 * @see UserPriorityAlertGetCriteriaListResponse
 * @see ErrorResponse
 */
class UserPriorityAlertGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

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


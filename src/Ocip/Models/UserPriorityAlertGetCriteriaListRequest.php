<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPriorityAlertGetCriteriaListRequest
 *
 * Get the user's priority alert criteria listing.
 *         The response is either a UserPriorityAlertGetCriteriaListResponse or an ErrorResponse.
 *
 * @see UserPriorityAlertGetCriteriaListResponse
 * @see ErrorResponse
 * @Groups [{"id":"48b0abc609ecbfab1fb1ee61c1de62ea:88","type":"sequence"}]
 */
class UserPriorityAlertGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 48b0abc609ecbfab1fb1ee61c1de62ea:88
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


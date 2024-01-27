<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTerminatingClosedUserGroupGetRequest
 *
 * Get user Terminating CUG service settings.
 *         The response is either UserTerminatingClosedUserGroupGetResponse or ErrorResponse.
 *
 * @see UserTerminatingClosedUserGroupGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4119","type":"sequence"}]
 */
class UserTerminatingClosedUserGroupGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4119
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


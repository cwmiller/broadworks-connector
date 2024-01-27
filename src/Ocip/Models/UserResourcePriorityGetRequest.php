<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserResourcePriorityGetRequest
 *
 * Get the Resource Priority settings of a user.
 *         The response is either UserResourcePriorityGetResponse or ErrorResponse.
 *
 * @see UserResourcePriorityGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"1eceb69ac1f6f751a3ee0dce729e5cc2:146","type":"sequence"}]
 */
class UserResourcePriorityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 1eceb69ac1f6f751a3ee0dce729e5cc2:146
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


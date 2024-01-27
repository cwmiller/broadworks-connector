<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectRouteGetRequest
 *
 * Get the direct route setting and the list of DTGs/Trunk Identities assigned to a user.
 *         The response is either UserDirectRouteGetResponse or ErrorResponse.
 *
 * @see UserDirectRouteGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"448c1807ef39a1a06e7d8d4d16ecaa31:41","type":"sequence"}]
 */
class UserDirectRouteGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 448c1807ef39a1a06e7d8d4d16ecaa31:41
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


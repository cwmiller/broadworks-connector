<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupNightForwardingGetRequest
 *
 * Request to get the Group Night Forwarding user parameters.
 *         The response is either UserGroupNightForwardingGetResponse or
 * ErrorResponse.
 *
 * @see UserGroupNightForwardingGetResponse
 * @see ErrorResponse
 */
class UserGroupNightForwardingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


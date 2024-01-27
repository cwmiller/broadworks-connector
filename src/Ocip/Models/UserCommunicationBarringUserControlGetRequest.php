<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringUserControlGetRequest
 *
 * Lists the Communication Barring profiles available to a user and
 *         indicates which profile if any is currently active for the user..
 *         The response is either UserCommunicationBarringUserControlGetResponse or ErrorResponse.
 *
 * @see UserCommunicationBarringUserControlGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"6844af6fc359ada5d958622d62cbd13f:96","type":"sequence"}]
 */
class UserCommunicationBarringUserControlGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6844af6fc359ada5d958622d62cbd13f:96
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


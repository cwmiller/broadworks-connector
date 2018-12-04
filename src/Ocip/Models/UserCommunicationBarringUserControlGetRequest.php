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
 * @Groups [{"id":"4d373d11d8022fd17bc1bdfe8e07cc37:96","type":"sequence"}]
 */
class UserCommunicationBarringUserControlGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4d373d11d8022fd17bc1bdfe8e07cc37:96
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


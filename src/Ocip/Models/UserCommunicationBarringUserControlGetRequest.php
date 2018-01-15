<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringUserControlGetRequest
 *
 * Lists the Communication Barring profiles available to a user and
 *         indicates which profile if any is currently active for the user..
 *         The response is either UserCommunicationBarringUserControlGetResponse or
 * ErrorResponse.
 */
class UserCommunicationBarringUserControlGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}


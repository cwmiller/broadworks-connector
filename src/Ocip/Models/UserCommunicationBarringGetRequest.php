<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringGetRequest
 *
 * Gets the Communication Barring settings for a user.  
 *         The response is either a UserCommunicationBarringGetResponse or an
 * ErrorResponse.
 *         This command only applies to groups in an Enterprise. This command will
 * fail for groups in a Service Provider.
 *
 * @see UserCommunicationBarringGetResponse
 * @see ErrorResponse
 */
class UserCommunicationBarringGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


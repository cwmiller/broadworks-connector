<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetGreetingRequest18sp1
 *
 * Get the user's voice messaging greeting information.
 *         The response is either a UserVoiceMessagingUserGetGreetingResponse18sp1 or an ErrorResponse.
 *         
 *         Replaced by: UserVoiceMessagingUserGetGreetingRequest20 in AS data mode
 *
 * @see UserVoiceMessagingUserGetGreetingResponse18sp1
 * @see ErrorResponse
 * @see UserVoiceMessagingUserGetGreetingRequest20
 * @Groups [{"id":"41b97abf851f90806786d3c9083c0604:417","type":"sequence"}]
 */
class UserVoiceMessagingUserGetGreetingRequest18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 41b97abf851f90806786d3c9083c0604:417
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


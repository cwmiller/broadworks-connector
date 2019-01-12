<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushToTalkGetRequest
 *
 * Request the push to talk service setting.
 *         The response is either a UserPushToTalkGetResponse or an ErrorResponse.
 *
 * @see UserPushToTalkGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"f32f4b57593f3e1ac6ed1cf45ed62b7c:86","type":"sequence"}]
 */
class UserPushToTalkGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f32f4b57593f3e1ac6ed1cf45ed62b7c:86
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


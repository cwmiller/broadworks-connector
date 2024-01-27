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
 * @Groups [{"id":"22c82692327758edb5adf1f1db18fc71:86","type":"sequence"}]
 */
class UserPushToTalkGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 22c82692327758edb5adf1f1db18fc71:86
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


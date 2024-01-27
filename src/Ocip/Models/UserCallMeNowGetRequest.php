<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowGetRequest
 *
 * Get the user's call me now service setting.
 *         The response is either a UserCallMeNowGetResponse or an ErrorResponse.
 *
 * @see UserCallMeNowGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"adf9583170c1dc9ec6c152ba1238437a:167","type":"sequence"}]
 */
class UserCallMeNowGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group adf9583170c1dc9ec6c152ba1238437a:167
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallNotifyGetRequest
 *
 * Get the user's call notify service setting.
 *         The response is either a UserCallNotifyGetResponse or an ErrorResponse.
 *
 * @see UserCallNotifyGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"ec1be3ca6e990aac87b6fcf39d5e3445:227","type":"sequence"}]
 */
class UserCallNotifyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group ec1be3ca6e990aac87b6fcf39d5e3445:227
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


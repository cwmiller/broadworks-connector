<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDoNotDisturbGetRequest
 *
 * Request the user level data associated with Do Not Disturb.
 *         The response is either a UserDoNotDisturbGetResponse or an
 *         ErrorResponse.
 *
 * @see UserDoNotDisturbGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"f424ffe4eea042849235863d758363ec:42","type":"sequence"}]
 */
class UserDoNotDisturbGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group f424ffe4eea042849235863d758363ec:42
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


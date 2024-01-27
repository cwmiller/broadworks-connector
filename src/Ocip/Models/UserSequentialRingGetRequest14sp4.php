<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSequentialRingGetRequest14sp4
 *
 * Get the user's sequential ring service setting.
 *         The response is either a UserSequentialRingGetResponse14sp4 or an ErrorResponse.
 *
 * @see UserSequentialRingGetResponse14sp4
 * @see ErrorResponse
 * @Groups [{"id":"15725c7b98a01f80f88e9d5af56d48a5:118","type":"sequence"}]
 */
class UserSequentialRingGetRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 15725c7b98a01f80f88e9d5af56d48a5:118
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


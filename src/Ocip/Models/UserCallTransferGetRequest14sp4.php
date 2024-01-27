<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallTransferGetRequest14sp4
 *
 * Request the user level data associated with Call Transfer.
 *         The response is either a UserCallTransferGetResponse14sp4 or an
 *         ErrorResponse.
 *
 * @see UserCallTransferGetResponse14sp4
 * @see ErrorResponse
 * @Groups [{"id":"7a0da3cd21ff9c39efcb7d6d9f013f8b:42","type":"sequence"}]
 */
class UserCallTransferGetRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 7a0da3cd21ff9c39efcb7d6d9f013f8b:42
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallTransferGetRequest
 *
 * Request the user level data associated with Call Transfer.
 *         The response is either a UserCallTransferGetResponse or an
 * ErrorResponse.
 *         Replaced By: UserCallTransferGetRequest14Sp4
 *
 * @see UserCallTransferGetResponse
 * @see ErrorResponse
 * @see UserCallTransferGetRequest14
 */
class UserCallTransferGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


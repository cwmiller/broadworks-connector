<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallTransferGetRequest
 *
 * Request the user level data associated with Call Transfer.
 *         The response is either a UserCallTransferGetResponse or an ErrorResponse.
 *         Replaced By: UserCallTransferGetRequest14Sp4
 *
 * @see UserCallTransferGetResponse
 * @see ErrorResponse
 * @see UserCallTransferGetRequest14Sp4
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:33955","type":"sequence"}]
 */
class UserCallTransferGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:33955
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


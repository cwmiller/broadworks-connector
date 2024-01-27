<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateBridgeGetRequest20sp1
 *
 * Request the collaborate bridged assigned to the user. The user can only be assigned to one collaborate bridge at any given time.
 *         The response is either UserCollaborateBridgeGetResponse20sp1 or 
 *         ErrorResponse.
 *
 * @see UserCollaborateBridgeGetResponse20sp1
 * @see ErrorResponse
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:575","type":"sequence"}]
 */
class UserCollaborateBridgeGetRequest20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group bc805893b9cc7e3e01eec64e9ad62768:575
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


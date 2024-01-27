<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateBridgeGetRequest
 *
 * Request the collaborate bridged assigned to the user. The user can only be assigned to one collaborate bridge at any given time.
 *         The response is either UserCollaborateBridgeGetResponse or ErrorResponse.
 *         
 *         Replaced by: UserCollaborateBridgeGetRequest20sp1
 *
 * @see UserCollaborateBridgeGetResponse
 * @see ErrorResponse
 * @see UserCollaborateBridgeGetRequest20sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:42478","type":"sequence"}]
 */
class UserCollaborateBridgeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:42478
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


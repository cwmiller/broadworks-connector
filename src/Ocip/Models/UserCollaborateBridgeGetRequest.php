<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateBridgeGetRequest
 *
 * Request the collaborate bridged assigned to the user. The user can only be assigned to one collaborate
 *                 bridge at any given time.
 *                 The response is either UserCollaborateBridgeGetResponse or ErrorResponse.
 *
 *                 Replaced by: UserCollaborateBridgeGetRequest20sp1
 *
 * @see UserCollaborateBridgeGetResponse
 * @see ErrorResponse
 * @see UserCollaborateBridgeGetRequest20sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:40465","type":"sequence"}]
 */
class UserCollaborateBridgeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40465
     * @MinLength 1
     * @MaxLength 161
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


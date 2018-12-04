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
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:34055","type":"sequence"}]
 */
class UserCollaborateBridgeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:34055
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


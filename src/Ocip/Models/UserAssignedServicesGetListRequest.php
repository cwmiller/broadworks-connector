<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAssignedServicesGetListRequest
 *
 * Get the list of assigned User and Group Services for the specified user.
 *         The response is either an UserAssignedServicesGetListResponse or an ErrorResponse.
 *
 * @see UserAssignedServicesGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"489b2153267470be8e945bf6b778e0d0:632","type":"sequence"}]
 */
class UserAssignedServicesGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Optional
     * @Group 489b2153267470be8e945bf6b778e0d0:632
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


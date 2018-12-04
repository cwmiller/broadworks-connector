<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetUserIdDataRequest21sp1
 *
 * Returns the Sh non-transparent data stored against a userId.
 *         The response is either a UserShInterfaceGetUserIdDataResponse21sp1 or an ErrorResponse.
 *
 * @see UserShInterfaceGetUserIdDataResponse21sp1
 * @see ErrorResponse
 * @Groups [{"id":"489b2153267470be8e945bf6b778e0d0:3309","type":"sequence"}]
 */
class UserShInterfaceGetUserIdDataRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 489b2153267470be8e945bf6b778e0d0:3309
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


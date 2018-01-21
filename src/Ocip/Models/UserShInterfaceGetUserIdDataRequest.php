<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetUserIdDataRequest
 *
 * Returns the Sh non-transparent data stored against a userId.
 *         The response is either a UserShInterfaceGetUserIdDataResponse or an
 * ErrorResponse.
 *         
 *         Replaced by: UserShInterfaceGetUserIdDataRequest21sp1 in AS data mode.
 */
class UserShInterfaceGetUserIdDataRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


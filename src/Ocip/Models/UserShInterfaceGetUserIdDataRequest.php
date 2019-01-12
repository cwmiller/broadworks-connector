<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetUserIdDataRequest
 *
 * Returns the Sh non-transparent data stored against a userId.
 *         The response is either a UserShInterfaceGetUserIdDataResponse or an ErrorResponse.
 *         
 *         Replaced by: UserShInterfaceGetUserIdDataRequest21sp1 in AS data mode.
 *
 * @see UserShInterfaceGetUserIdDataResponse
 * @see ErrorResponse
 * @see UserShInterfaceGetUserIdDataRequest21sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:8022","type":"sequence"}]
 */
class UserShInterfaceGetUserIdDataRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:8022
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


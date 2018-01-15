<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSMDIMessageDeskGetServerListRequest
 *
 * Request to get a list of SMDI Servers defined for a user.
 *         The response is either a UserSMDIMessageDeskGetServerListResponse or an
 * ErrorResponse.
 */
class UserSMDIMessageDeskGetServerListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


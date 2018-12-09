<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSMDIMessageDeskGetServerListRequest
 *
 * Request to get a list of SMDI Servers defined for a user.
 *         The response is either a UserSMDIMessageDeskGetServerListResponse or an ErrorResponse.
 *
 * @see UserSMDIMessageDeskGetServerListResponse
 * @see ErrorResponse
 * @Groups [{"id":"584e9b2c2c8a6d282376c11d0e3ab848:292","type":"sequence"}]
 */
class UserSMDIMessageDeskGetServerListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 584e9b2c2c8a6d282376c11d0e3ab848:292
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


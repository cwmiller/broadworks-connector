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
 * @Groups [{"id":"aa3a240fa755015613cfb9259eccafef:292","type":"sequence"}]
 */
class UserSMDIMessageDeskGetServerListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group aa3a240fa755015613cfb9259eccafef:292
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


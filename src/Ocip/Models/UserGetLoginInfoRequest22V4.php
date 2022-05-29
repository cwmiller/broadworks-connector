<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetLoginInfoRequest22V4
 *
 * UserGetLoginInfoRequest22V4 is used to access login information for a user
 *         either by a userId, dn or lineport.  
 *         The phone number may be any DN associated with a user.
 *         The lineport may be any lineport associated with a user.
 *         
 *         The response is a UserGetLoginInfoResponse22V4 or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS and Amplify data mode.
 *           loginRole
 *
 * @see UserGetLoginInfoRequest22V4
 * @see UserGetLoginInfoResponse22V4
 * @see ErrorResponse
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:592","type":"sequence","children":[{"id":"6b27fcc79475236456fc113a42b75543:593","type":"choice","children":[{"id":"6b27fcc79475236456fc113a42b75543:594","type":"sequence"}]}]}]
 */
class UserGetLoginInfoRequest22V4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 6b27fcc79475236456fc113a42b75543:594
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName loginRole
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LoginRole
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:594
     * @var \CWM\BroadWorksConnector\Ocip\Models\LoginRole|null
     */
    protected $loginRole = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 6b27fcc79475236456fc113a42b75543:593
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $phoneNumber = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 6b27fcc79475236456fc113a42b75543:593
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

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

    /**
     * Getter for loginRole
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LoginRole
     */
    public function getLoginRole()
    {
        return $this->loginRole instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->loginRole;
    }

    /**
     * Setter for loginRole
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LoginRole $loginRole
     * @return $this
     */
    public function setLoginRole(\CWM\BroadWorksConnector\Ocip\Models\LoginRole $loginRole)
    {
        $this->loginRole = $loginRole;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLoginRole()
    {
        $this->loginRole = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for linePort
     *
     * @return string
     */
    public function getLinePort()
    {
        return $this->linePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @param string $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePort()
    {
        $this->linePort = null;
        return $this;
    }


}


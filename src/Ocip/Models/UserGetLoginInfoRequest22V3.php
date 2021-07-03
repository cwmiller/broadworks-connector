<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetLoginInfoRequest22V3
 *
 * UserGetLoginInfoRequest22V3 is used to access login information for a user
 *         either by a userId, dn or lineport.  
 *         The phone number may be any DN associated with a user.
 *         The lineport may be any lineport associated with a user.
 *         
 *         The response is a UserGetLoginInfoResponse22V3 or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS and Amplify data mode.
 *           loginRole
 *
 * @see UserGetLoginInfoRequest22V3
 * @see UserGetLoginInfoResponse22V3
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:43173","type":"sequence","children":[{"id":"ab0042aa512abc10edb3c55e4b416b0b:43174","type":"choice","children":[{"id":"ab0042aa512abc10edb3c55e4b416b0b:43175","type":"sequence"}]}]}]
 */
class UserGetLoginInfoRequest22V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43175
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName loginRole
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LoginRole
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43175
     * @var \CWM\BroadWorksConnector\Ocip\Models\LoginRole|null
     */
    private $loginRole = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43174
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43174
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $linePort = null;

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


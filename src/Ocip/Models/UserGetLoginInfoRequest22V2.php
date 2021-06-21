<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetLoginInfoRequest22V2
 *
 * UserGetLoginInfoRequest22V2 is used to access login information for a user
 *         either by a userId, dn or lineport.  
 *         The phone number may be any DN associated with a user.
 *         The lineport may be any lineport associated with a user.
 *         
 *         The response is a UserGetLoginInfoResponse22V2 or an ErrorResponse
 *         
 *         Replaced by UserGetLoginInfoRequest22V3.
 *
 * @see UserGetLoginInfoRequest22V2
 * @see UserGetLoginInfoResponse22V2
 * @see ErrorResponse
 * @see UserGetLoginInfoRequest22V3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:43098","type":"sequence","children":[{"id":"ab0042aa512abc10edb3c55e4b416b0b:43099","type":"choice"}]}]
 */
class UserGetLoginInfoRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43099
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43099
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43099
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


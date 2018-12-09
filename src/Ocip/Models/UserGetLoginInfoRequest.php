<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetLoginInfoRequest
 *
 * UserGetLoginInfoRequest is used to access login information for a user
 *         either by a userId or dn.  The phone number may be any
 *         DN associated with a user.
 *         The response is a UserGetLoginInfoResponse or an ErrorResponse
 *         
 *         Replaced by UserGetLoginInfoRequest22.
 *
 * @see UserGetLoginInfoRequest
 * @see UserGetLoginInfoResponse
 * @see ErrorResponse
 * @see UserGetLoginInfoRequest22
 * @Groups [{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:1656","type":"sequence","children":[{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:1657","type":"choice"}]}]
 */
class UserGetLoginInfoRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:1657
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:1657
     * @var string|null
     */
    private $phoneNumber = null;

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


}


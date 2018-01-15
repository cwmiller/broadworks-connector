<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringUserControlModifyRequest
 *
 * Enabling a profile automatically disables the currently active profile.
 *         Also allows the passcode for the service to be modified and the lockout
 * to be reset.
 *         Admins only need to populate the newPasscode field when changing the
 * passcode.  
 *         Users must populate both the oldPasscode and new Passcode fields when
 * changing the passcode.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserCommunicationBarringUserControlModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName enableProfile
     * @var int|null
     */
    private $enableProfile = null;

    /**
     * @ElementName oldPasscode
     * @var string|null
     */
    private $oldPasscode = null;

    /**
     * @ElementName newPasscode
     * @var string|null
     */
    private $newPasscode = null;

    /**
     * @ElementName resetLockout
     * @var bool|null
     */
    private $resetLockout = null;

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

    /**
     * Getter for enableProfile
     *
     * @ElementName enableProfile
     * @return int|null
     */
    public function getEnableProfile()
    {
        return $this->enableProfile;
    }

    /**
     * Setter for enableProfile
     *
     * @ElementName enableProfile
     * @param int|null $enableProfile
     * @return $this
     */
    public function setEnableProfile($enableProfile)
    {
        $this->enableProfile = $enableProfile;
        return $this;
    }

    /**
     * Getter for oldPasscode
     *
     * @ElementName oldPasscode
     * @return string|null
     */
    public function getOldPasscode()
    {
        return $this->oldPasscode;
    }

    /**
     * Setter for oldPasscode
     *
     * @ElementName oldPasscode
     * @param string|null $oldPasscode
     * @return $this
     */
    public function setOldPasscode($oldPasscode)
    {
        $this->oldPasscode = $oldPasscode;
        return $this;
    }

    /**
     * Getter for newPasscode
     *
     * @ElementName newPasscode
     * @return string|null
     */
    public function getNewPasscode()
    {
        return $this->newPasscode;
    }

    /**
     * Setter for newPasscode
     *
     * @ElementName newPasscode
     * @param string|null $newPasscode
     * @return $this
     */
    public function setNewPasscode($newPasscode)
    {
        $this->newPasscode = $newPasscode;
        return $this;
    }

    /**
     * Getter for resetLockout
     *
     * @ElementName resetLockout
     * @return bool|null
     */
    public function getResetLockout()
    {
        return $this->resetLockout;
    }

    /**
     * Setter for resetLockout
     *
     * @ElementName resetLockout
     * @param bool|null $resetLockout
     * @return $this
     */
    public function setResetLockout($resetLockout)
    {
        $this->resetLockout = $resetLockout;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringUserControlModifyRequest
 *
 * Enabling a profile automatically disables the currently active profile.
 *         Also allows the passcode for the service to be modified and the lockout to be reset.
 *         Admins only need to populate the newPasscode field when changing the passcode.  
 *         Users must populate both the oldPasscode and new Passcode fields when changing the passcode.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4277c572e54919d6e29f4c0fa69aaad1:134","type":"sequence"}]
 */
class UserCommunicationBarringUserControlModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4277c572e54919d6e29f4c0fa69aaad1:134
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName enableProfile
     * @Type int
     * @Nillable
     * @Optional
     * @Group 4277c572e54919d6e29f4c0fa69aaad1:134
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $enableProfile = null;

    /**
     * @ElementName oldPasscode
     * @Type string
     * @Optional
     * @Group 4277c572e54919d6e29f4c0fa69aaad1:134
     * @var string|null
     */
    private $oldPasscode = null;

    /**
     * @ElementName newPasscode
     * @Type string
     * @Optional
     * @Group 4277c572e54919d6e29f4c0fa69aaad1:134
     * @var string|null
     */
    private $newPasscode = null;

    /**
     * @ElementName resetLockout
     * @Type bool
     * @Optional
     * @Group 4277c572e54919d6e29f4c0fa69aaad1:134
     * @var bool|null
     */
    private $resetLockout = null;

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
     * Getter for enableProfile
     *
     * @return int|null
     */
    public function getEnableProfile()
    {
        return $this->enableProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableProfile;
    }

    /**
     * Setter for enableProfile
     *
     * @param int|null $enableProfile
     * @return $this
     */
    public function setEnableProfile($enableProfile = null)
    {
        if ($enableProfile === null) {
            $this->enableProfile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->enableProfile = $enableProfile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableProfile()
    {
        $this->enableProfile = null;
        return $this;
    }

    /**
     * Getter for oldPasscode
     *
     * @return string
     */
    public function getOldPasscode()
    {
        return $this->oldPasscode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->oldPasscode;
    }

    /**
     * Setter for oldPasscode
     *
     * @param string $oldPasscode
     * @return $this
     */
    public function setOldPasscode($oldPasscode)
    {
        $this->oldPasscode = $oldPasscode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOldPasscode()
    {
        $this->oldPasscode = null;
        return $this;
    }

    /**
     * Getter for newPasscode
     *
     * @return string
     */
    public function getNewPasscode()
    {
        return $this->newPasscode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newPasscode;
    }

    /**
     * Setter for newPasscode
     *
     * @param string $newPasscode
     * @return $this
     */
    public function setNewPasscode($newPasscode)
    {
        $this->newPasscode = $newPasscode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewPasscode()
    {
        $this->newPasscode = null;
        return $this;
    }

    /**
     * Getter for resetLockout
     *
     * @return bool
     */
    public function getResetLockout()
    {
        return $this->resetLockout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resetLockout;
    }

    /**
     * Setter for resetLockout
     *
     * @param bool $resetLockout
     * @return $this
     */
    public function setResetLockout($resetLockout)
    {
        $this->resetLockout = $resetLockout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResetLockout()
    {
        $this->resetLockout = null;
        return $this;
    }


}


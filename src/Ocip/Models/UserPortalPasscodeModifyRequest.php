<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPortalPasscodeModifyRequest
 *
 * Modify the user's Portal passcode
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserPortalPasscodeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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


}


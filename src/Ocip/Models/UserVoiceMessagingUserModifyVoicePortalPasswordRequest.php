<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserModifyVoicePortalPasswordRequest
 *
 * Modify the user's Voice Portal password
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 *         Replaced By: UserPortalPasscodeModifyRequest
 */
class UserVoiceMessagingUserModifyVoicePortalPasswordRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName oldPassword
     * @var string|null
     */
    private $oldPassword = null;

    /**
     * @ElementName newPassword
     * @var string|null
     */
    private $newPassword = null;

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
     * Getter for oldPassword
     *
     * @ElementName oldPassword
     * @return string|null
     */
    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    /**
     * Setter for oldPassword
     *
     * @ElementName oldPassword
     * @param string|null $oldPassword
     * @return $this
     */
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
        return $this;
    }

    /**
     * Getter for newPassword
     *
     * @ElementName newPassword
     * @return string|null
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * Setter for newPassword
     *
     * @ElementName newPassword
     * @param string|null $newPassword
     * @return $this
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }


}


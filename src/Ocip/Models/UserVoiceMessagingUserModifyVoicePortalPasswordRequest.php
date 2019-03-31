<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserModifyVoicePortalPasswordRequest
 *
 * Modify the user's Voice Portal password
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *                 Engineering Note: This command is used internally by Call Processing.
 *                 Replaced By: UserPortalPasscodeModifyRequest
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserPortalPasscodeModifyRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:7896","type":"sequence"}]
 */
class UserVoiceMessagingUserModifyVoicePortalPasswordRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7896
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName oldPassword
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7896
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $oldPassword = null;

    /**
     * @ElementName newPassword
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7896
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $newPassword = null;

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
     * Getter for oldPassword
     *
     * @return string
     */
    public function getOldPassword()
    {
        return $this->oldPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->oldPassword;
    }

    /**
     * Setter for oldPassword
     *
     * @param string $oldPassword
     * @return $this
     */
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOldPassword()
    {
        $this->oldPassword = null;
        return $this;
    }

    /**
     * Getter for newPassword
     *
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newPassword;
    }

    /**
     * Setter for newPassword
     *
     * @param string $newPassword
     * @return $this
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewPassword()
    {
        $this->newPassword = null;
        return $this;
    }


}


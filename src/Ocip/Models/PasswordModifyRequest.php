<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordModifyRequest
 *
 * Modify the password for a user/administrator.
 *         When oldPassword is specified, password rule applies. If oldPassword in
 * not specified,
 *         any password rule related to old password does not apply.        
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class PasswordModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName oldPassword
     * @Type string
     * @var string|null
     */
    private $oldPassword = null;

    /**
     * @ElementName newPassword
     * @Type string
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


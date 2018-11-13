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
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName oldPasscode
     * @Type string
     * @var string|null
     */
    private $oldPasscode = null;

    /**
     * @ElementName newPasscode
     * @Type string
     * @var string|null
     */
    private $newPasscode = null;

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


}


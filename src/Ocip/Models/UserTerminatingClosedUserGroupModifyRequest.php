<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTerminatingClosedUserGroupModifyRequest
 *
 * Modify user Terminating CUG service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4151","type":"sequence"}]
 */
class UserTerminatingClosedUserGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4151
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName userInterlockCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4151
     * @Length 4
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $userInterlockCode = null;

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
     * Getter for userInterlockCode
     *
     * @return string|null
     */
    public function getUserInterlockCode()
    {
        return $this->userInterlockCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userInterlockCode;
    }

    /**
     * Setter for userInterlockCode
     *
     * @param string|null $userInterlockCode
     * @return $this
     */
    public function setUserInterlockCode($userInterlockCode = null)
    {
        if ($userInterlockCode === null) {
            $this->userInterlockCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->userInterlockCode = $userInterlockCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserInterlockCode()
    {
        $this->userInterlockCode = null;
        return $this;
    }
}


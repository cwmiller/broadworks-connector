<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserNumberPortabilityAnnouncementModifyRequest
 *
 * Modify the Number Portability Announcement attributes for the user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6abb48a2d0672804f15670b4afa7ec02:75","type":"sequence"}]
 */
class UserNumberPortabilityAnnouncementModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 6abb48a2d0672804f15670b4afa7ec02:75
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName enable
     * @Type bool
     * @Optional
     * @Group 6abb48a2d0672804f15670b4afa7ec02:75
     * @var bool|null
     */
    protected $enable = null;

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
     * Getter for enable
     *
     * @return bool
     */
    public function getEnable()
    {
        return $this->enable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enable;
    }

    /**
     * Setter for enable
     *
     * @param bool $enable
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnable()
    {
        $this->enable = null;
        return $this;
    }


}


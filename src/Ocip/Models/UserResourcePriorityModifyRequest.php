<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserResourcePriorityModifyRequest
 *
 * Modify the Resource Priority settings of a user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0c61aa8506194ca714d0fe1c4a0b57ff:182","type":"sequence"}]
 */
class UserResourcePriorityModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 0c61aa8506194ca714d0fe1c4a0b57ff:182
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName useDefaultResourcePriority
     * @Type bool
     * @Optional
     * @Group 0c61aa8506194ca714d0fe1c4a0b57ff:182
     * @var bool|null
     */
    protected $useDefaultResourcePriority = null;

    /**
     * @ElementName userResourcePriority
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue
     * @Optional
     * @Group 0c61aa8506194ca714d0fe1c4a0b57ff:182
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue|null
     */
    protected $userResourcePriority = null;

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
     * Getter for useDefaultResourcePriority
     *
     * @return bool
     */
    public function getUseDefaultResourcePriority()
    {
        return $this->useDefaultResourcePriority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDefaultResourcePriority;
    }

    /**
     * Setter for useDefaultResourcePriority
     *
     * @param bool $useDefaultResourcePriority
     * @return $this
     */
    public function setUseDefaultResourcePriority($useDefaultResourcePriority)
    {
        $this->useDefaultResourcePriority = $useDefaultResourcePriority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDefaultResourcePriority()
    {
        $this->useDefaultResourcePriority = null;
        return $this;
    }

    /**
     * Getter for userResourcePriority
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue
     */
    public function getUserResourcePriority()
    {
        return $this->userResourcePriority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userResourcePriority;
    }

    /**
     * Setter for userResourcePriority
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue $userResourcePriority
     * @return $this
     */
    public function setUserResourcePriority(\CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue $userResourcePriority)
    {
        $this->userResourcePriority = $userResourcePriority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserResourcePriority()
    {
        $this->userResourcePriority = null;
        return $this;
    }


}


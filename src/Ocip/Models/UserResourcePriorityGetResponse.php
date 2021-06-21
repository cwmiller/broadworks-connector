<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserResourcePriorityGetResponse
 *
 * Response to UserResourcePriorityGetRequest.
 *         Contains the Resource Priority settings of a user.
 *         If useDefaultResourcePriority is true, parameter resourcePriority will not be returned.
 *
 * @see UserResourcePriorityGetRequest
 * @Groups [{"id":"0c61aa8506194ca714d0fe1c4a0b57ff:164","type":"sequence"}]
 */
class UserResourcePriorityGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useDefaultResourcePriority
     * @Type bool
     * @Group 0c61aa8506194ca714d0fe1c4a0b57ff:164
     * @var bool|null
     */
    private $useDefaultResourcePriority = null;

    /**
     * @ElementName defaultResourcePriority
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue
     * @Group 0c61aa8506194ca714d0fe1c4a0b57ff:164
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue|null
     */
    private $defaultResourcePriority = null;

    /**
     * @ElementName userResourcePriority
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue
     * @Group 0c61aa8506194ca714d0fe1c4a0b57ff:164
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue|null
     */
    private $userResourcePriority = null;

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
     * Getter for defaultResourcePriority
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue
     */
    public function getDefaultResourcePriority()
    {
        return $this->defaultResourcePriority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultResourcePriority;
    }

    /**
     * Setter for defaultResourcePriority
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue $defaultResourcePriority
     * @return $this
     */
    public function setDefaultResourcePriority(\CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue $defaultResourcePriority)
    {
        $this->defaultResourcePriority = $defaultResourcePriority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultResourcePriority()
    {
        $this->defaultResourcePriority = null;
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


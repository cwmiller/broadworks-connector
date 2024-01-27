<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AssignedUserServicesEntry
 *
 * Assigned User Services List Entry.
 *         The isActive element is true, false, or could be missing completely.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:642","type":"sequence"}]
 */
class AssignedUserServicesEntry
{
    /**
     * @ElementName serviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Group 6337d0cfba4de1c83587203c5b0bae54:642
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    protected $serviceName = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:642
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * Getter for serviceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService
     */
    public function getServiceName()
    {
        return $this->serviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $serviceName
     * @return $this
     */
    public function setServiceName(\CWM\BroadWorksConnector\Ocip\Models\UserService $serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceName()
    {
        $this->serviceName = null;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }
}


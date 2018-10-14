<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AssignedUserServicesEntry
 *
 * Assigned User Services List Entry.
 *         The isActive element is true, false, or could be missing completely.
 */
class AssignedUserServicesEntry
{

    /**
     * @ElementName serviceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    private $serviceName = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * Getter for serviceName
     *
     * @ElementName serviceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @ElementName serviceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService|null $serviceName
     * @return $this
     */
    public function setServiceName(\CWM\BroadWorksConnector\Ocip\Models\UserService $serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }


}


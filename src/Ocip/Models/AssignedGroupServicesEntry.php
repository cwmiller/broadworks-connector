<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AssignedGroupServicesEntry
 *
 * Assigned Group Services List Entry.
 *         The isActive element is true, false, or could be missing completely.
 */
class AssignedGroupServicesEntry
{

    /**
     * @ElementName serviceName
     * @var string|null
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
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @ElementName serviceName
     * @param string|null $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
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


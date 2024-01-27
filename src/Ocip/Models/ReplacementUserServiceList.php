<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementUserServiceList
 *
 * A list of user services that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4529","type":"sequence"}]
 */
class ReplacementUserServiceList
{
    /**
     * @ElementName serviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4529
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    protected $serviceName = [
        
    ];

    /**
     * Getter for serviceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    public function getServiceName()
    {
        return $this->serviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService[] $serviceName
     * @return $this
     */
    public function setServiceName(array $serviceName)
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
     * Adder for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $serviceName
     * @return $this
     */
    public function addServiceName($serviceName)
    {
        $this->serviceName[] = $serviceName;
        return $this;
    }
}


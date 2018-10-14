<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementUserServiceList
 *
 * A list of user services that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementUserServiceList
{

    /**
     * @ElementName serviceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    private $serviceName = array(
        
    );

    /**
     * Getter for serviceName
     *
     * @ElementName serviceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @ElementName serviceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService[] $serviceName
     * @return $this
     */
    public function setServiceName(array $serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * Adder for serviceName
     *
     * @ElementName serviceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $serviceName
     * @return $this
     */
    public function addServiceName($serviceName)
    {
        $this->serviceName []= $serviceName;
        return $this;
    }


}


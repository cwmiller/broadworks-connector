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
     * @var string[]
     */
    private $serviceName = array(
        
    );

    /**
     * Getter for serviceName
     *
     * @ElementName serviceName
     * @return string[]
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @ElementName serviceName
     * @param string[] $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * Adder for serviceName
     *
     * @ElementName serviceName
     * @param string $serviceName
     * @return $this
     */
    public function addServiceName($serviceName)
    {
        $this->serviceName []= $serviceName;
        return $this;
    }


}


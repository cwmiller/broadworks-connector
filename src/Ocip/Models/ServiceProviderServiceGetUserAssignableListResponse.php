<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServiceGetUserAssignableListResponse
 *
 * Response to ServiceProviderServiceGetUserAssignableListRequest.
 *
 * @see ServiceProviderServiceGetUserAssignableListRequest
 */
class ServiceProviderServiceGetUserAssignableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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


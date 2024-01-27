<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServiceGetUserAssignableListResponse
 *
 * Response to ServiceProviderServiceGetUserAssignableListRequest.
 *
 * @see ServiceProviderServiceGetUserAssignableListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6084","type":"sequence"}]
 */
class ServiceProviderServiceGetUserAssignableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6084
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


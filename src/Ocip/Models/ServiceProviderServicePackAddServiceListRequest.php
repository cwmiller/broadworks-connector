<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackAddServiceListRequest
 *
 * Request to add services to a service pack if the pack has not been authorized to
 * a group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackAddServiceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName servicePackName
     * @var string|null
     */
    private $servicePackName = null;

    /**
     * @ElementName serviceName
     * @var string[]
     */
    private $serviceName = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for servicePackName
     *
     * @ElementName servicePackName
     * @return string|null
     */
    public function getServicePackName()
    {
        return $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @ElementName servicePackName
     * @param string|null $servicePackName
     * @return $this
     */
    public function setServicePackName($servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

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


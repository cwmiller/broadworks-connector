<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackAddRequest
 *
 * Request to add a service pack to a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderServicePackAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName servicePackDescription
     * @var string|null
     */
    private $servicePackDescription = null;

    /**
     * @ElementName isAvailableForUse
     * @var bool|null
     */
    private $isAvailableForUse = null;

    /**
     * @ElementName servicePackQuantity
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $servicePackQuantity = null;

    /**
     * @ElementName serviceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
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
     * Getter for servicePackDescription
     *
     * @ElementName servicePackDescription
     * @return string|null
     */
    public function getServicePackDescription()
    {
        return $this->servicePackDescription;
    }

    /**
     * Setter for servicePackDescription
     *
     * @ElementName servicePackDescription
     * @param string|null $servicePackDescription
     * @return $this
     */
    public function setServicePackDescription($servicePackDescription)
    {
        $this->servicePackDescription = $servicePackDescription;
        return $this;
    }

    /**
     * Getter for isAvailableForUse
     *
     * @ElementName isAvailableForUse
     * @return bool|null
     */
    public function getIsAvailableForUse()
    {
        return $this->isAvailableForUse;
    }

    /**
     * Setter for isAvailableForUse
     *
     * @ElementName isAvailableForUse
     * @param bool|null $isAvailableForUse
     * @return $this
     */
    public function setIsAvailableForUse($isAvailableForUse)
    {
        $this->isAvailableForUse = $isAvailableForUse;
        return $this;
    }

    /**
     * Getter for servicePackQuantity
     *
     * @ElementName servicePackQuantity
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    public function getServicePackQuantity()
    {
        return $this->servicePackQuantity;
    }

    /**
     * Setter for servicePackQuantity
     *
     * @ElementName servicePackQuantity
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null $servicePackQuantity
     * @return $this
     */
    public function setServicePackQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $servicePackQuantity)
    {
        $this->servicePackQuantity = $servicePackQuantity;
        return $this;
    }

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


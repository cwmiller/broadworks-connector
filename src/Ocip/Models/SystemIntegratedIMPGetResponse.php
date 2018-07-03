<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemIntegratedIMPGetResponse
 *
 * Response to the SystemIntegratedIMPGetRequest.
 *         The response contains the system Integrated IMP service attributes.
 *         
 *         Replaced by SystemIntegratedIMPGetResponse19.
 *
 * @see SystemIntegratedIMPGetRequest
 * @see SystemIntegratedIMPGetResponse19
 */
class SystemIntegratedIMPGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceDomain
     * @var string|null
     */
    private $serviceDomain = null;

    /**
     * @ElementName servicePort
     * @var int|null
     */
    private $servicePort = null;

    /**
     * @ElementName addServiceProviderInIMPUserId
     * @var bool|null
     */
    private $addServiceProviderInIMPUserId = null;

    /**
     * Getter for serviceDomain
     *
     * @ElementName serviceDomain
     * @return string|null
     */
    public function getServiceDomain()
    {
        return $this->serviceDomain;
    }

    /**
     * Setter for serviceDomain
     *
     * @ElementName serviceDomain
     * @param string|null $serviceDomain
     * @return $this
     */
    public function setServiceDomain($serviceDomain)
    {
        $this->serviceDomain = $serviceDomain;
        return $this;
    }

    /**
     * Getter for servicePort
     *
     * @ElementName servicePort
     * @return int|null
     */
    public function getServicePort()
    {
        return $this->servicePort;
    }

    /**
     * Setter for servicePort
     *
     * @ElementName servicePort
     * @param int|null $servicePort
     * @return $this
     */
    public function setServicePort($servicePort)
    {
        $this->servicePort = $servicePort;
        return $this;
    }

    /**
     * Getter for addServiceProviderInIMPUserId
     *
     * @ElementName addServiceProviderInIMPUserId
     * @return bool|null
     */
    public function getAddServiceProviderInIMPUserId()
    {
        return $this->addServiceProviderInIMPUserId;
    }

    /**
     * Setter for addServiceProviderInIMPUserId
     *
     * @ElementName addServiceProviderInIMPUserId
     * @param bool|null $addServiceProviderInIMPUserId
     * @return $this
     */
    public function setAddServiceProviderInIMPUserId($addServiceProviderInIMPUserId)
    {
        $this->addServiceProviderInIMPUserId = $addServiceProviderInIMPUserId;
        return $this;
    }


}


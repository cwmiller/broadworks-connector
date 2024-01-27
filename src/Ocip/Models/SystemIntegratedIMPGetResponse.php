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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:27844","type":"sequence"}]
 */
class SystemIntegratedIMPGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceDomain
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:27844
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $serviceDomain = null;

    /**
     * @ElementName servicePort
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:27844
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $servicePort = null;

    /**
     * @ElementName addServiceProviderInIMPUserId
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:27844
     * @var bool|null
     */
    protected $addServiceProviderInIMPUserId = null;

    /**
     * Getter for serviceDomain
     *
     * @return string
     */
    public function getServiceDomain()
    {
        return $this->serviceDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceDomain;
    }

    /**
     * Setter for serviceDomain
     *
     * @param string $serviceDomain
     * @return $this
     */
    public function setServiceDomain($serviceDomain)
    {
        $this->serviceDomain = $serviceDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceDomain()
    {
        $this->serviceDomain = null;
        return $this;
    }

    /**
     * Getter for servicePort
     *
     * @return int
     */
    public function getServicePort()
    {
        return $this->servicePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePort;
    }

    /**
     * Setter for servicePort
     *
     * @param int $servicePort
     * @return $this
     */
    public function setServicePort($servicePort)
    {
        $this->servicePort = $servicePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePort()
    {
        $this->servicePort = null;
        return $this;
    }

    /**
     * Getter for addServiceProviderInIMPUserId
     *
     * @return bool
     */
    public function getAddServiceProviderInIMPUserId()
    {
        return $this->addServiceProviderInIMPUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addServiceProviderInIMPUserId;
    }

    /**
     * Setter for addServiceProviderInIMPUserId
     *
     * @param bool $addServiceProviderInIMPUserId
     * @return $this
     */
    public function setAddServiceProviderInIMPUserId($addServiceProviderInIMPUserId)
    {
        $this->addServiceProviderInIMPUserId = $addServiceProviderInIMPUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddServiceProviderInIMPUserId()
    {
        $this->addServiceProviderInIMPUserId = null;
        return $this;
    }
}


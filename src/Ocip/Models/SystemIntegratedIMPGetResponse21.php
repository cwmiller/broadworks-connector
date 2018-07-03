<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemIntegratedIMPGetResponse21
 *
 * Response to the SystemIntegratedIMPGetRequest21.
 *         The response contains the system Integrated IMP service attributes.
 *         
 *         The following elements are only used in AS data mode:
 *           boshURL
 *
 * @see SystemIntegratedIMPGetRequest21
 */
class SystemIntegratedIMPGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName boshURL
     * @var string|null
     */
    private $boshURL = null;

    /**
     * @ElementName allowImpPasswordRetrieval
     * @var bool|null
     */
    private $allowImpPasswordRetrieval = null;

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

    /**
     * Getter for boshURL
     *
     * @ElementName boshURL
     * @return string|null
     */
    public function getBoshURL()
    {
        return $this->boshURL;
    }

    /**
     * Setter for boshURL
     *
     * @ElementName boshURL
     * @param string|null $boshURL
     * @return $this
     */
    public function setBoshURL($boshURL)
    {
        $this->boshURL = $boshURL;
        return $this;
    }

    /**
     * Getter for allowImpPasswordRetrieval
     *
     * @ElementName allowImpPasswordRetrieval
     * @return bool|null
     */
    public function getAllowImpPasswordRetrieval()
    {
        return $this->allowImpPasswordRetrieval;
    }

    /**
     * Setter for allowImpPasswordRetrieval
     *
     * @ElementName allowImpPasswordRetrieval
     * @param bool|null $allowImpPasswordRetrieval
     * @return $this
     */
    public function setAllowImpPasswordRetrieval($allowImpPasswordRetrieval)
    {
        $this->allowImpPasswordRetrieval = $allowImpPasswordRetrieval;
        return $this;
    }


}


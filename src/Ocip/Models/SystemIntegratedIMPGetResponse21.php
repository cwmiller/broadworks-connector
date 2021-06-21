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
 * @Groups [{"id":"23389100b68cef3aa07ee12ac7a2bd16:273","type":"sequence"}]
 */
class SystemIntegratedIMPGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceDomain
     * @Type string
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:273
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $serviceDomain = null;

    /**
     * @ElementName servicePort
     * @Type int
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:273
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    private $servicePort = null;

    /**
     * @ElementName addServiceProviderInIMPUserId
     * @Type bool
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:273
     * @var bool|null
     */
    private $addServiceProviderInIMPUserId = null;

    /**
     * @ElementName boshURL
     * @Type string
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:273
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $boshURL = null;

    /**
     * @ElementName allowImpPasswordRetrieval
     * @Type bool
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:273
     * @var bool|null
     */
    private $allowImpPasswordRetrieval = null;

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

    /**
     * Getter for boshURL
     *
     * @return string
     */
    public function getBoshURL()
    {
        return $this->boshURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->boshURL;
    }

    /**
     * Setter for boshURL
     *
     * @param string $boshURL
     * @return $this
     */
    public function setBoshURL($boshURL)
    {
        $this->boshURL = $boshURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBoshURL()
    {
        $this->boshURL = null;
        return $this;
    }

    /**
     * Getter for allowImpPasswordRetrieval
     *
     * @return bool
     */
    public function getAllowImpPasswordRetrieval()
    {
        return $this->allowImpPasswordRetrieval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowImpPasswordRetrieval;
    }

    /**
     * Setter for allowImpPasswordRetrieval
     *
     * @param bool $allowImpPasswordRetrieval
     * @return $this
     */
    public function setAllowImpPasswordRetrieval($allowImpPasswordRetrieval)
    {
        $this->allowImpPasswordRetrieval = $allowImpPasswordRetrieval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowImpPasswordRetrieval()
    {
        $this->allowImpPasswordRetrieval = null;
        return $this;
    }


}


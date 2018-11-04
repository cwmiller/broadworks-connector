<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemIntegratedIMPModifyRequest
 *
 * Modify the system Integrated IMP service attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *           boshURL
 *           allowImpPasswordRetrieval
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemIntegratedIMPModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceDomain
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceDomain = null;

    /**
     * @ElementName servicePort
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $servicePort = null;

    /**
     * @ElementName addServiceProviderInIMPUserId
     * @var bool|null
     */
    private $addServiceProviderInIMPUserId = null;

    /**
     * @ElementName boshURL
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getServiceDomain()
    {
        return $this->serviceDomain;
    }

    /**
     * Setter for serviceDomain
     *
     * @ElementName serviceDomain
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $serviceDomain
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getServicePort()
    {
        return $this->servicePort;
    }

    /**
     * Setter for servicePort
     *
     * @ElementName servicePort
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $servicePort
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getBoshURL()
    {
        return $this->boshURL;
    }

    /**
     * Setter for boshURL
     *
     * @ElementName boshURL
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $boshURL
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


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
 * @Groups [{"id":"23389100b68cef3aa07ee12ac7a2bd16:297","type":"sequence"}]
 */
class SystemIntegratedIMPModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceDomain
     * @Type string
     * @Nillable
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:297
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceDomain = null;

    /**
     * @ElementName servicePort
     * @Type int
     * @Nillable
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:297
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $servicePort = null;

    /**
     * @ElementName addServiceProviderInIMPUserId
     * @Type bool
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:297
     * @var bool|null
     */
    private $addServiceProviderInIMPUserId = null;

    /**
     * @ElementName boshURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:297
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $boshURL = null;

    /**
     * @ElementName allowImpPasswordRetrieval
     * @Type bool
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:297
     * @var bool|null
     */
    private $allowImpPasswordRetrieval = null;

    /**
     * Getter for serviceDomain
     *
     * @return string|null
     */
    public function getServiceDomain()
    {
        return $this->serviceDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceDomain;
    }

    /**
     * Setter for serviceDomain
     *
     * @param string|null $serviceDomain
     * @return $this
     */
    public function setServiceDomain($serviceDomain = null)
    {
        if ($serviceDomain === null) {
            $this->serviceDomain = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serviceDomain = $serviceDomain;
        }
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
     * @return int|null
     */
    public function getServicePort()
    {
        return $this->servicePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePort;
    }

    /**
     * Setter for servicePort
     *
     * @param int|null $servicePort
     * @return $this
     */
    public function setServicePort($servicePort = null)
    {
        if ($servicePort === null) {
            $this->servicePort = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->servicePort = $servicePort;
        }
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
     * @return string|null
     */
    public function getBoshURL()
    {
        return $this->boshURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->boshURL;
    }

    /**
     * Setter for boshURL
     *
     * @param string|null $boshURL
     * @return $this
     */
    public function setBoshURL($boshURL = null)
    {
        if ($boshURL === null) {
            $this->boshURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->boshURL = $boshURL;
        }
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIntegratedIMPGetResponse21
 *
 * Response to the ServiceProviderIntegratedIMPGetRequest21.
 *         The response contains the service provider Integrated IMP service attributes.
 *         If the service provider is within a reseller, useSystemServiceDomain means using reseller level service 
 *         domain setting. And useSystemMessagingServer means using the reseller level messaging server setting.
 *         
 *         Replaced by: ServiceProviderIntegratedIMPGetResponse21sp1 in AS data mode
 *
 * @see ServiceProviderIntegratedIMPGetRequest21
 * @see ServiceProviderIntegratedIMPGetResponse21sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:6987","type":"sequence"}]
 */
class ServiceProviderIntegratedIMPGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useSystemServiceDomain
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:6987
     * @var bool|null
     */
    protected $useSystemServiceDomain = null;

    /**
     * @ElementName serviceDomain
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:6987
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $serviceDomain = null;

    /**
     * @ElementName servicePort
     * @Type int
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:6987
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $servicePort = null;

    /**
     * @ElementName useSystemMessagingServer
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:6987
     * @var bool|null
     */
    protected $useSystemMessagingServer = null;

    /**
     * @ElementName provisioningUrl
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:6987
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $provisioningUrl = null;

    /**
     * @ElementName provisioningUserId
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:6987
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $provisioningUserId = null;

    /**
     * @ElementName boshURL
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:6987
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $boshURL = null;

    /**
     * Getter for useSystemServiceDomain
     *
     * @return bool
     */
    public function getUseSystemServiceDomain()
    {
        return $this->useSystemServiceDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemServiceDomain;
    }

    /**
     * Setter for useSystemServiceDomain
     *
     * @param bool $useSystemServiceDomain
     * @return $this
     */
    public function setUseSystemServiceDomain($useSystemServiceDomain)
    {
        $this->useSystemServiceDomain = $useSystemServiceDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemServiceDomain()
    {
        $this->useSystemServiceDomain = null;
        return $this;
    }

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
     * Getter for useSystemMessagingServer
     *
     * @return bool
     */
    public function getUseSystemMessagingServer()
    {
        return $this->useSystemMessagingServer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemMessagingServer;
    }

    /**
     * Setter for useSystemMessagingServer
     *
     * @param bool $useSystemMessagingServer
     * @return $this
     */
    public function setUseSystemMessagingServer($useSystemMessagingServer)
    {
        $this->useSystemMessagingServer = $useSystemMessagingServer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemMessagingServer()
    {
        $this->useSystemMessagingServer = null;
        return $this;
    }

    /**
     * Getter for provisioningUrl
     *
     * @return string
     */
    public function getProvisioningUrl()
    {
        return $this->provisioningUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningUrl;
    }

    /**
     * Setter for provisioningUrl
     *
     * @param string $provisioningUrl
     * @return $this
     */
    public function setProvisioningUrl($provisioningUrl)
    {
        $this->provisioningUrl = $provisioningUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProvisioningUrl()
    {
        $this->provisioningUrl = null;
        return $this;
    }

    /**
     * Getter for provisioningUserId
     *
     * @return string
     */
    public function getProvisioningUserId()
    {
        return $this->provisioningUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningUserId;
    }

    /**
     * Setter for provisioningUserId
     *
     * @param string $provisioningUserId
     * @return $this
     */
    public function setProvisioningUserId($provisioningUserId)
    {
        $this->provisioningUserId = $provisioningUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProvisioningUserId()
    {
        $this->provisioningUserId = null;
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
}


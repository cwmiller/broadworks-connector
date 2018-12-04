<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIntegratedIMPModifyRequest
 *
 * Modify the Integrated IMP service attributes for the service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         If the service provider is within a reseller, useSystemServiceDomain means using reseller level service 
 *         domain setting. And useSystemMessagingServer means using the reseller level messaging server setting.
 *         
 *         The following elements are only used in AS data mode:
 *           servicePort
 *           useSystemMessagingServer
 *           provisioningUrl
 *           provisioningUserId
 *           provisioningPassword
 *           boshURL
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"8351e8f51540f77c264b2f9bdf7fada4:216","type":"sequence"}]
 */
class ServiceProviderIntegratedIMPModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8351e8f51540f77c264b2f9bdf7fada4:216
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName useSystemServiceDomain
     * @Type bool
     * @Optional
     * @Group 8351e8f51540f77c264b2f9bdf7fada4:216
     * @var bool|null
     */
    private $useSystemServiceDomain = null;

    /**
     * @ElementName serviceDomain
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8351e8f51540f77c264b2f9bdf7fada4:216
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceDomain = null;

    /**
     * @ElementName servicePort
     * @Type int
     * @Nillable
     * @Optional
     * @Group 8351e8f51540f77c264b2f9bdf7fada4:216
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $servicePort = null;

    /**
     * @ElementName useSystemMessagingServer
     * @Type bool
     * @Optional
     * @Group 8351e8f51540f77c264b2f9bdf7fada4:216
     * @var bool|null
     */
    private $useSystemMessagingServer = null;

    /**
     * @ElementName provisioningUrl
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8351e8f51540f77c264b2f9bdf7fada4:216
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningUrl = null;

    /**
     * @ElementName provisioningUserId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8351e8f51540f77c264b2f9bdf7fada4:216
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningUserId = null;

    /**
     * @ElementName provisioningPassword
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8351e8f51540f77c264b2f9bdf7fada4:216
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningPassword = null;

    /**
     * @ElementName boshURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8351e8f51540f77c264b2f9bdf7fada4:216
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $boshURL = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

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
    public function setServiceDomain($serviceDomain)
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
    public function setServicePort($servicePort)
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
     * @return string|null
     */
    public function getProvisioningUrl()
    {
        return $this->provisioningUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningUrl;
    }

    /**
     * Setter for provisioningUrl
     *
     * @param string|null $provisioningUrl
     * @return $this
     */
    public function setProvisioningUrl($provisioningUrl)
    {
        if ($provisioningUrl === null) {
            $this->provisioningUrl = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->provisioningUrl = $provisioningUrl;
        }
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
     * @return string|null
     */
    public function getProvisioningUserId()
    {
        return $this->provisioningUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningUserId;
    }

    /**
     * Setter for provisioningUserId
     *
     * @param string|null $provisioningUserId
     * @return $this
     */
    public function setProvisioningUserId($provisioningUserId)
    {
        if ($provisioningUserId === null) {
            $this->provisioningUserId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->provisioningUserId = $provisioningUserId;
        }
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
     * Getter for provisioningPassword
     *
     * @return string|null
     */
    public function getProvisioningPassword()
    {
        return $this->provisioningPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningPassword;
    }

    /**
     * Setter for provisioningPassword
     *
     * @param string|null $provisioningPassword
     * @return $this
     */
    public function setProvisioningPassword($provisioningPassword)
    {
        if ($provisioningPassword === null) {
            $this->provisioningPassword = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->provisioningPassword = $provisioningPassword;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProvisioningPassword()
    {
        $this->provisioningPassword = null;
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
    public function setBoshURL($boshURL)
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


}


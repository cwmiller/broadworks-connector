<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerIntegratedIMPModifyRequest
 *
 * Modify the Integrated IMP service attributes for the reseller.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ResellerIntegratedIMPModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName useSystemServiceDomain
     * @var bool|null
     */
    private $useSystemServiceDomain = null;

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
     * @ElementName useSystemMessagingServer
     * @var bool|null
     */
    private $useSystemMessagingServer = null;

    /**
     * @ElementName provisioningUrl
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningUrl = null;

    /**
     * @ElementName provisioningUserId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningUserId = null;

    /**
     * @ElementName provisioningPassword
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningPassword = null;

    /**
     * @ElementName boshURL
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $boshURL = null;

    /**
     * Getter for resellerId
     *
     * @ElementName resellerId
     * @return string|null
     */
    public function getResellerId()
    {
        return $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @ElementName resellerId
     * @param string|null $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * Getter for useSystemServiceDomain
     *
     * @ElementName useSystemServiceDomain
     * @return bool|null
     */
    public function getUseSystemServiceDomain()
    {
        return $this->useSystemServiceDomain;
    }

    /**
     * Setter for useSystemServiceDomain
     *
     * @ElementName useSystemServiceDomain
     * @param bool|null $useSystemServiceDomain
     * @return $this
     */
    public function setUseSystemServiceDomain($useSystemServiceDomain)
    {
        $this->useSystemServiceDomain = $useSystemServiceDomain;
        return $this;
    }

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
     * Getter for useSystemMessagingServer
     *
     * @ElementName useSystemMessagingServer
     * @return bool|null
     */
    public function getUseSystemMessagingServer()
    {
        return $this->useSystemMessagingServer;
    }

    /**
     * Setter for useSystemMessagingServer
     *
     * @ElementName useSystemMessagingServer
     * @param bool|null $useSystemMessagingServer
     * @return $this
     */
    public function setUseSystemMessagingServer($useSystemMessagingServer)
    {
        $this->useSystemMessagingServer = $useSystemMessagingServer;
        return $this;
    }

    /**
     * Getter for provisioningUrl
     *
     * @ElementName provisioningUrl
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getProvisioningUrl()
    {
        return $this->provisioningUrl;
    }

    /**
     * Setter for provisioningUrl
     *
     * @ElementName provisioningUrl
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $provisioningUrl
     * @return $this
     */
    public function setProvisioningUrl($provisioningUrl)
    {
        $this->provisioningUrl = $provisioningUrl;
        return $this;
    }

    /**
     * Getter for provisioningUserId
     *
     * @ElementName provisioningUserId
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getProvisioningUserId()
    {
        return $this->provisioningUserId;
    }

    /**
     * Setter for provisioningUserId
     *
     * @ElementName provisioningUserId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $provisioningUserId
     * @return $this
     */
    public function setProvisioningUserId($provisioningUserId)
    {
        $this->provisioningUserId = $provisioningUserId;
        return $this;
    }

    /**
     * Getter for provisioningPassword
     *
     * @ElementName provisioningPassword
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getProvisioningPassword()
    {
        return $this->provisioningPassword;
    }

    /**
     * Setter for provisioningPassword
     *
     * @ElementName provisioningPassword
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $provisioningPassword
     * @return $this
     */
    public function setProvisioningPassword($provisioningPassword)
    {
        $this->provisioningPassword = $provisioningPassword;
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


}


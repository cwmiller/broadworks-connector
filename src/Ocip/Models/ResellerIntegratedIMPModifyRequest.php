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
     * @var string|null
     */
    private $serviceDomain = null;

    /**
     * @ElementName servicePort
     * @var int|null
     */
    private $servicePort = null;

    /**
     * @ElementName useSystemMessagingServer
     * @var bool|null
     */
    private $useSystemMessagingServer = null;

    /**
     * @ElementName provisioningUrl
     * @var string|null
     */
    private $provisioningUrl = null;

    /**
     * @ElementName provisioningUserId
     * @var string|null
     */
    private $provisioningUserId = null;

    /**
     * @ElementName provisioningPassword
     * @var string|null
     */
    private $provisioningPassword = null;

    /**
     * @ElementName boshURL
     * @var string|null
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
     * @return string|null
     */
    public function getProvisioningUrl()
    {
        return $this->provisioningUrl;
    }

    /**
     * Setter for provisioningUrl
     *
     * @ElementName provisioningUrl
     * @param string|null $provisioningUrl
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
     * @return string|null
     */
    public function getProvisioningUserId()
    {
        return $this->provisioningUserId;
    }

    /**
     * Setter for provisioningUserId
     *
     * @ElementName provisioningUserId
     * @param string|null $provisioningUserId
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
     * @return string|null
     */
    public function getProvisioningPassword()
    {
        return $this->provisioningPassword;
    }

    /**
     * Setter for provisioningPassword
     *
     * @ElementName provisioningPassword
     * @param string|null $provisioningPassword
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


}


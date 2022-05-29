<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIntegratedIMPGetResponse22
 *
 * Response to the ServiceProviderIntegratedIMPGetRequest22.
 *         The response contains the service provider Integrated IMP service attributes.
 *         If the service provider is within a reseller, useSystemServiceDomain means using reseller level service 
 *         domain setting. And useSystemMessagingServer means using the reseller level messaging server setting.
 *         The element useResellerIMPIdSetting means using the reseller level IMP User ID setting.
 *
 * @see ServiceProviderIntegratedIMPGetRequest22
 * @Groups [{"id":"23389100b68cef3aa07ee12ac7a2bd16:190","type":"sequence","children":[{"id":"23389100b68cef3aa07ee12ac7a2bd16:198","type":"choice"}]}]
 */
class ServiceProviderIntegratedIMPGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSystemServiceDomain
     * @Type bool
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:190
     * @var bool|null
     */
    protected $useSystemServiceDomain = null;

    /**
     * @ElementName serviceDomain
     * @Type string
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:190
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $serviceDomain = null;

    /**
     * @ElementName servicePort
     * @Type int
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:190
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $servicePort = null;

    /**
     * @ElementName useSystemMessagingServer
     * @Type bool
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:190
     * @var bool|null
     */
    protected $useSystemMessagingServer = null;

    /**
     * @ElementName provisioningUrl
     * @Type string
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:190
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $provisioningUrl = null;

    /**
     * @ElementName provisioningUserId
     * @Type string
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:190
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $provisioningUserId = null;

    /**
     * @ElementName boshURL
     * @Type string
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:190
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $boshURL = null;

    /**
     * @ElementName defaultImpIdType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IntegratedIMPUserIDType
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:198
     * @var \CWM\BroadWorksConnector\Ocip\Models\IntegratedIMPUserIDType|null
     */
    protected $defaultImpIdType = null;

    /**
     * @ElementName useResellerIMPIdSetting
     * @Type bool
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:198
     * @var bool|null
     */
    protected $useResellerIMPIdSetting = null;

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

    /**
     * Getter for defaultImpIdType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IntegratedIMPUserIDType
     */
    public function getDefaultImpIdType()
    {
        return $this->defaultImpIdType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultImpIdType;
    }

    /**
     * Setter for defaultImpIdType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IntegratedIMPUserIDType $defaultImpIdType
     * @return $this
     */
    public function setDefaultImpIdType(\CWM\BroadWorksConnector\Ocip\Models\IntegratedIMPUserIDType $defaultImpIdType)
    {
        $this->defaultImpIdType = $defaultImpIdType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultImpIdType()
    {
        $this->defaultImpIdType = null;
        return $this;
    }

    /**
     * Getter for useResellerIMPIdSetting
     *
     * @return bool
     */
    public function getUseResellerIMPIdSetting()
    {
        return $this->useResellerIMPIdSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useResellerIMPIdSetting;
    }

    /**
     * Setter for useResellerIMPIdSetting
     *
     * @param bool $useResellerIMPIdSetting
     * @return $this
     */
    public function setUseResellerIMPIdSetting($useResellerIMPIdSetting)
    {
        $this->useResellerIMPIdSetting = $useResellerIMPIdSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseResellerIMPIdSetting()
    {
        $this->useResellerIMPIdSetting = null;
        return $this;
    }


}


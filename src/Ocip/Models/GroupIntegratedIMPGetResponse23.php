<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupIntegratedIMPGetResponse23
 *
 * Response to the GroupIntegratedIMPGetRequest23.
 *         The response contains the group Integrated IMP service attributes.
 *         
 *         The following elements are only returned to a reseller administrator or above:
 *           useServiceProviderMessagingServer
 *           provisioningUrl
 *           provisioningUserId
 *
 * @see GroupIntegratedIMPGetRequest23
 * @Groups [{"id":"37cec25308bcc82fe5a80bf541c42c89:72","type":"sequence"}]
 */
class GroupIntegratedIMPGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useServiceProviderSetting
     * @Type bool
     * @Group 37cec25308bcc82fe5a80bf541c42c89:72
     * @var bool|null
     */
    protected $useServiceProviderSetting = null;

    /**
     * @ElementName serviceDomain
     * @Type string
     * @Optional
     * @Group 37cec25308bcc82fe5a80bf541c42c89:72
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $serviceDomain = null;

    /**
     * @ElementName effectiveServiceDomain
     * @Type string
     * @Optional
     * @Group 37cec25308bcc82fe5a80bf541c42c89:72
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $effectiveServiceDomain = null;

    /**
     * @ElementName addServiceProviderInIMPUserId
     * @Type bool
     * @Group 37cec25308bcc82fe5a80bf541c42c89:72
     * @var bool|null
     */
    protected $addServiceProviderInIMPUserId = null;

    /**
     * @ElementName defaultImpIdType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IntegratedIMPUserIDType
     * @Group 37cec25308bcc82fe5a80bf541c42c89:72
     * @var \CWM\BroadWorksConnector\Ocip\Models\IntegratedIMPUserIDType|null
     */
    protected $defaultImpIdType = null;

    /**
     * @ElementName useServiceProviderMessagingServer
     * @Type bool
     * @Optional
     * @Group 37cec25308bcc82fe5a80bf541c42c89:72
     * @var bool|null
     */
    protected $useServiceProviderMessagingServer = null;

    /**
     * @ElementName provisioningUrl
     * @Type string
     * @Optional
     * @Group 37cec25308bcc82fe5a80bf541c42c89:72
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $provisioningUrl = null;

    /**
     * @ElementName provisioningUserId
     * @Type string
     * @Optional
     * @Group 37cec25308bcc82fe5a80bf541c42c89:72
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $provisioningUserId = null;

    /**
     * Getter for useServiceProviderSetting
     *
     * @return bool
     */
    public function getUseServiceProviderSetting()
    {
        return $this->useServiceProviderSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useServiceProviderSetting;
    }

    /**
     * Setter for useServiceProviderSetting
     *
     * @param bool $useServiceProviderSetting
     * @return $this
     */
    public function setUseServiceProviderSetting($useServiceProviderSetting)
    {
        $this->useServiceProviderSetting = $useServiceProviderSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseServiceProviderSetting()
    {
        $this->useServiceProviderSetting = null;
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
     * Getter for effectiveServiceDomain
     *
     * @return string
     */
    public function getEffectiveServiceDomain()
    {
        return $this->effectiveServiceDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->effectiveServiceDomain;
    }

    /**
     * Setter for effectiveServiceDomain
     *
     * @param string $effectiveServiceDomain
     * @return $this
     */
    public function setEffectiveServiceDomain($effectiveServiceDomain)
    {
        $this->effectiveServiceDomain = $effectiveServiceDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEffectiveServiceDomain()
    {
        $this->effectiveServiceDomain = null;
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
     * Getter for useServiceProviderMessagingServer
     *
     * @return bool
     */
    public function getUseServiceProviderMessagingServer()
    {
        return $this->useServiceProviderMessagingServer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useServiceProviderMessagingServer;
    }

    /**
     * Setter for useServiceProviderMessagingServer
     *
     * @param bool $useServiceProviderMessagingServer
     * @return $this
     */
    public function setUseServiceProviderMessagingServer($useServiceProviderMessagingServer)
    {
        $this->useServiceProviderMessagingServer = $useServiceProviderMessagingServer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseServiceProviderMessagingServer()
    {
        $this->useServiceProviderMessagingServer = null;
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
}


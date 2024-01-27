<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupIntegratedIMPModifyRequest
 *
 * Modify the Integrated IMP service attributes for the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements can only be used by a reseller administrator or above:
 *           useServiceProviderMessagingServer
 *           provisioningUrl
 *           provisioningUserId
 *           provisioningPassword
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"37cec25308bcc82fe5a80bf541c42c89:101","type":"sequence"}]
 */
class GroupIntegratedIMPModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 37cec25308bcc82fe5a80bf541c42c89:101
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 37cec25308bcc82fe5a80bf541c42c89:101
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName useServiceProviderSetting
     * @Type bool
     * @Optional
     * @Group 37cec25308bcc82fe5a80bf541c42c89:101
     * @var bool|null
     */
    protected $useServiceProviderSetting = null;

    /**
     * @ElementName serviceDomain
     * @Type string
     * @Nillable
     * @Optional
     * @Group 37cec25308bcc82fe5a80bf541c42c89:101
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $serviceDomain = null;

    /**
     * @ElementName useServiceProviderMessagingServer
     * @Type bool
     * @Optional
     * @Group 37cec25308bcc82fe5a80bf541c42c89:101
     * @var bool|null
     */
    protected $useServiceProviderMessagingServer = null;

    /**
     * @ElementName provisioningUrl
     * @Type string
     * @Nillable
     * @Optional
     * @Group 37cec25308bcc82fe5a80bf541c42c89:101
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $provisioningUrl = null;

    /**
     * @ElementName provisioningUserId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 37cec25308bcc82fe5a80bf541c42c89:101
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $provisioningUserId = null;

    /**
     * @ElementName provisioningPassword
     * @Type string
     * @Nillable
     * @Optional
     * @Group 37cec25308bcc82fe5a80bf541c42c89:101
     * @MinLength 1
     * @MaxLength 20
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $provisioningPassword = null;

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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

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
    public function setProvisioningUrl($provisioningUrl = null)
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
    public function setProvisioningUserId($provisioningUserId = null)
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
    public function setProvisioningPassword($provisioningPassword = null)
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
}


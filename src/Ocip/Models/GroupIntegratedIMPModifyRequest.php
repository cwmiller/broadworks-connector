<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupIntegratedIMPModifyRequest
 *
 * Modify the Integrated IMP service attributes for the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupIntegratedIMPModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useServiceProviderSetting
     * @var bool|null
     */
    private $useServiceProviderSetting = null;

    /**
     * @ElementName serviceDomain
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceDomain = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for useServiceProviderSetting
     *
     * @ElementName useServiceProviderSetting
     * @return bool|null
     */
    public function getUseServiceProviderSetting()
    {
        return $this->useServiceProviderSetting;
    }

    /**
     * Setter for useServiceProviderSetting
     *
     * @ElementName useServiceProviderSetting
     * @param bool|null $useServiceProviderSetting
     * @return $this
     */
    public function setUseServiceProviderSetting($useServiceProviderSetting)
    {
        $this->useServiceProviderSetting = $useServiceProviderSetting;
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


}


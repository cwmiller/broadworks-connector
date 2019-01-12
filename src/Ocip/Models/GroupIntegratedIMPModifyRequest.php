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
 * @Groups [{"id":"23389100b68cef3aa07ee12ac7a2bd16:87","type":"sequence"}]
 */
class GroupIntegratedIMPModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:87
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:87
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useServiceProviderSetting
     * @Type bool
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:87
     * @var bool|null
     */
    private $useServiceProviderSetting = null;

    /**
     * @ElementName serviceDomain
     * @Type string
     * @Nillable
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:87
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceDomain = null;

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


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupIntegratedIMPGetResponse
 *
 * Response to the GroupIntegratedIMPGetRequest.
 *         The response contains the group Integrated IMP service attributes.
 *
 * @see GroupIntegratedIMPGetRequest
 */
class GroupIntegratedIMPGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useServiceProviderSetting
     * @var bool|null
     */
    private $useServiceProviderSetting = null;

    /**
     * @ElementName serviceDomain
     * @var string|null
     */
    private $serviceDomain = null;

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


}


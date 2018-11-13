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
     * @Type bool
     * @var bool|null
     */
    private $useServiceProviderSetting = null;

    /**
     * @ElementName serviceDomain
     * @Type string
     * @var string|null
     */
    private $serviceDomain = null;

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


}


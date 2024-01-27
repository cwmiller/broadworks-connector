<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupIntegratedIMPGetResponse
 *
 * Response to the GroupIntegratedIMPGetRequest.
 *         The response contains the group Integrated IMP service attributes.
 *         
 *         Replaced by: GroupIntegratedIMPGetResponse21sp1 in AS data mode
 *
 * @see GroupIntegratedIMPGetRequest
 * @see GroupIntegratedIMPGetResponse21sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:11023","type":"sequence"}]
 */
class GroupIntegratedIMPGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useServiceProviderSetting
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:11023
     * @var bool|null
     */
    protected $useServiceProviderSetting = null;

    /**
     * @ElementName serviceDomain
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:11023
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $serviceDomain = null;

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


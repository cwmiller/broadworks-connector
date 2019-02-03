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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:4815","type":"sequence"}]
 */
class GroupIntegratedIMPGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useServiceProviderSetting
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:4815
     * @var bool|null
     */
    private $useServiceProviderSetting = null;

    /**
     * @ElementName serviceDomain
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:4815
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


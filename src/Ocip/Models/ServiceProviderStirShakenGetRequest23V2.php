<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderStirShakenGetRequest23V2
 *
 * Get service provider Stir Shaken service settings.
 *         The response is either ServiceProviderStirShakenGetResponse23V2 or ErrorResponse.
 *         Replaced by ServiceProviderStirShakenGetRequest23V3.
 *
 * @see ServiceProviderStirShakenGetResponse23V2
 * @see ErrorResponse
 * @see ServiceProviderStirShakenGetRequest23V3
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:22477","type":"sequence"}]
 */
class ServiceProviderStirShakenGetRequest23V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:22477
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

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
}


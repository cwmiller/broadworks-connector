<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderStirShakenGetRequest
 *
 * Get service provider Stir Shaken service settings.
 *         The response is either ServiceProviderStirShakenGetResponse or ErrorResponse.
 *         Replaced by the ServiceProviderStirShakenGetRequest23.
 *
 * @see ServiceProviderStirShakenGetResponse
 * @see ErrorResponse
 * @see ServiceProviderStirShakenGetRequest23
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19745","type":"sequence"}]
 */
class ServiceProviderStirShakenGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:19745
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


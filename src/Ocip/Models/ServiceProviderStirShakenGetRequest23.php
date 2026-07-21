<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderStirShakenGetRequest23
 *
 * Get service provider Stir Shaken service settings.
 *         The response is either ServiceProviderStirShakenGetResponse23 or ErrorResponse.
 *         Replaced by ServiceProviderStirShakenGetRequest23V2.
 *
 * @see ServiceProviderStirShakenGetResponse23
 * @see ErrorResponse
 * @see ServiceProviderStirShakenGetRequest23V2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:22460","type":"sequence"}]
 */
class ServiceProviderStirShakenGetRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:22460
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


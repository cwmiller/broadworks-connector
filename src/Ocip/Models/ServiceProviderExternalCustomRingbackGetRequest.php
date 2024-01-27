<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderExternalCustomRingbackGetRequest
 *
 * Request the service provider level data associated with External Custom Ringback.
 *         The response is either a ServiceProviderExternalCustomRingbackGetResponse or an
 *         ErrorResponse.
 *
 * @see ServiceProviderExternalCustomRingbackGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"2c9f194a3272e429f2e5215dd988b94a:46","type":"sequence"}]
 */
class ServiceProviderExternalCustomRingbackGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 2c9f194a3272e429f2e5215dd988b94a:46
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


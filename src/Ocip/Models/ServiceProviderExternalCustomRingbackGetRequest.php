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
 * @Groups [{"id":"a8df43dca23d99d8ab44c0082aadfbe0:46","type":"sequence"}]
 */
class ServiceProviderExternalCustomRingbackGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group a8df43dca23d99d8ab44c0082aadfbe0:46
     * @var string|null
     */
    private $serviceProviderId = null;

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


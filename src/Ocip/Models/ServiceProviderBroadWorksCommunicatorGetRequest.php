<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksCommunicatorGetRequest
 *
 * Request to get Configuration Server for a specified service
 *         provider. The response is either a ServiceProviderBroadWorksCommunicatorGetResponse or an ErrorResponse.
 *
 * @see ServiceProviderBroadWorksCommunicatorGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"b4095e83c8aa84e850615ffe7d48b0d6:42","type":"sequence"}]
 */
class ServiceProviderBroadWorksCommunicatorGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b4095e83c8aa84e850615ffe7d48b0d6:42
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


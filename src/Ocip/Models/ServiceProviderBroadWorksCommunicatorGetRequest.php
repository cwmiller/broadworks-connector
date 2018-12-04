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
 * @Groups [{"id":"e067ceae06d86c702b5874526f56fad3:42","type":"sequence"}]
 */
class ServiceProviderBroadWorksCommunicatorGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e067ceae06d86c702b5874526f56fad3:42
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


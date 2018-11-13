<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInCallServiceActivationGetRequest
 *
 * Request the service provider's DTMF based in-call service activation trigger
 * attributes.The response is either a
 * ServiceProviderInCallServiceActivationGetResponse or an ErrorResponse.
 *           Replaced by: ServiceProviderInCallServiceActivationGetRequest17
 *
 * @see ServiceProviderInCallServiceActivationGetResponse
 * @see ErrorResponse
 * @see ServiceProviderInCallServiceActivationGetRequest17
 */
class ServiceProviderInCallServiceActivationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
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


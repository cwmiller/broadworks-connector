<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInCallServiceActivationGetRequest
 *
 * Request the service provider's DTMF based in-call service activation trigger
 * attributes.The response is either a
 * ServiceProviderInCallServiceActivationGetResponse or an ErrorResponse.
 *
 *           Replaced by: ServiceProviderInCallServiceActivationGetRequest17
 */
class ServiceProviderInCallServiceActivationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDialableCallerIDGetRequest
 *
 * Get the service provider?s Dialable Caller ID settings and criteria list.
 *         The response is either a 
 *         ServiceProviderDialableCallerIDGetResponse or an ErrorResponse.
 */
class ServiceProviderDialableCallerIDGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


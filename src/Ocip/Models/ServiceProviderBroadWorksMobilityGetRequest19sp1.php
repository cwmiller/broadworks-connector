<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksMobilityGetRequest19sp1
 *
 * Get the service provider BroadWorks Mobility service settings.
 *         The response is either a
 * ServiceProviderBroadWorksMobilityGetResponse19sp1 or an ErrorResponse.
 */
class ServiceProviderBroadWorksMobilityGetRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest14
 *
 * Request the service provider level data associated with Call Processing
 *         Policy. The response is either a
 *         ServiceProviderCallProcessingGetPolicyResponse14 or an ErrorResponse.
 */
class ServiceProviderCallProcessingGetPolicyRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


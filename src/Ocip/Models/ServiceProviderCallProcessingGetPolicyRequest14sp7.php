<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest14sp7
 *
 * Request the service provider level data associated with Call Processing
 *             Policy. The response is either a
 *             ServiceProviderCallProcessingGetPolicyResponse14sp7 or an
 * ErrorResponse.
 *
 *             Replaced By: ServiceProviderCallProcessingGetPolicyRequest16
 */
class ServiceProviderCallProcessingGetPolicyRequest14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


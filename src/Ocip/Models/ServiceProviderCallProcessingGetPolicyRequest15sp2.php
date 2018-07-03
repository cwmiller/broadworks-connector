<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest15sp2
 *
 * Request the service provider level data associated with Call Processing
 *             Policy. The response is either a
 *             ServiceProviderCallProcessingGetPolicyResponse15sp2 or an
 * ErrorResponse.
 *
 * @see ServiceProviderCallProcessingGetPolicyResponse15sp2
 * @see ErrorResponse
 */
class ServiceProviderCallProcessingGetPolicyRequest15sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


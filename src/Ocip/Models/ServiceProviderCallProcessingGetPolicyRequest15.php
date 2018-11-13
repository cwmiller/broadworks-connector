<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest15
 *
 * Request the service provider level data associated with Call Processing
 *             Policy. The response is either a
 *             ServiceProviderCallProcessingGetPolicyResponse15 or an
 * ErrorResponse.
 *             Replaced By: ServiceProviderCallProcessingGetPolicyRequest16
 *
 * @see ServiceProviderCallProcessingGetPolicyResponse15
 * @see ErrorResponse
 * @see ServiceProviderCallProcessingGetPolicyRequest16
 */
class ServiceProviderCallProcessingGetPolicyRequest15 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


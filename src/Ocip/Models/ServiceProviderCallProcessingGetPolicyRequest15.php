<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest15
 *
 * Request the service provider level data associated with Call Processing
 *             Policy. 
 *             The response is either a ServiceProviderCallProcessingGetPolicyResponse15 or an ErrorResponse.
 *             Replaced By: ServiceProviderCallProcessingGetPolicyRequest16
 *
 * @see ServiceProviderCallProcessingGetPolicyResponse15
 * @see ErrorResponse
 * @see ServiceProviderCallProcessingGetPolicyRequest16
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:18156","type":"sequence"}]
 */
class ServiceProviderCallProcessingGetPolicyRequest15 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:18156
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


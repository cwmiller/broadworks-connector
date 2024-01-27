<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest16sp2
 *
 * Request the service provider level data associated with Call Processing
 *         Policy. 
 *         The response is either a ServiceProviderCallProcessingGetPolicyResponse16sp2 or an ErrorResponse.
 *
 * @see ServiceProviderCallProcessingGetPolicyResponse16sp2
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:18207","type":"sequence"}]
 */
class ServiceProviderCallProcessingGetPolicyRequest16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:18207
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest17sp4
 *
 * Request the service provider level data associated with Call Processing
 *         Policy. 
 *         The response is either a ServiceProviderCallProcessingGetPolicyResponse17sp4 or an ErrorResponse.
 *         
 *         Replaced By : ServiceProviderCallProcessingGetPolicyRequest18sp1
 *
 * @see ServiceProviderCallProcessingGetPolicyResponse17sp4
 * @see ErrorResponse
 * @see ServiceProviderCallProcessingGetPolicyRequest18sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:18262","type":"sequence"}]
 */
class ServiceProviderCallProcessingGetPolicyRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:18262
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


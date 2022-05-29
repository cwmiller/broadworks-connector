<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest22V2
 *
 * Request the service provider level data associated with Call Processing
 *         Policy. The response is either a ServiceProviderCallProcessingGetPolicyResponse22V2 or an ErrorResponse.
 *         
 *         Replaced by: ServiceProviderCallProcessingGetPolicyRequest22V3 in AS data mode.
 *
 * @see ServiceProviderCallProcessingGetPolicyResponse22V2
 * @see ErrorResponse
 * @see ServiceProviderCallProcessingGetPolicyRequest22V3
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5239","type":"sequence"}]
 */
class ServiceProviderCallProcessingGetPolicyRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5239
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


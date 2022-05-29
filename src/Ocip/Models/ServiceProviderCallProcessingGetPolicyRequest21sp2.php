<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest21sp2
 *
 * Request the service provider level data associated with Call Processing
 *         Policy. The response is either a ServiceProviderCallProcessingGetPolicyResponse21sp2 or an ErrorResponse.
 *         Replaced by: ServiceProviderCallProcessingGetPolicyRequest22 in AS data mode
 *
 * @see ServiceProviderCallProcessingGetPolicyResponse21sp2
 * @see ErrorResponse
 * @see ServiceProviderCallProcessingGetPolicyRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5203","type":"sequence"}]
 */
class ServiceProviderCallProcessingGetPolicyRequest21sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5203
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest14sp7
 *
 * Request the service provider level data associated with Call Processing
 *             Policy. The response is either a ServiceProviderCallProcessingGetPolicyResponse14sp7 or an ErrorResponse.
 *             Replaced By: ServiceProviderCallProcessingGetPolicyRequest16
 *
 * @see ServiceProviderCallProcessingGetPolicyResponse14sp7
 * @see ErrorResponse
 * @see ServiceProviderCallProcessingGetPolicyRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:17610","type":"sequence"}]
 */
class ServiceProviderCallProcessingGetPolicyRequest14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:17610
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


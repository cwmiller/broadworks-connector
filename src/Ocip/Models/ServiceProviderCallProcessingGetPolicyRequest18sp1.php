<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest18sp1
 *
 * Request the service provider level data associated with Call Processing
 *         Policy. The response is either a ServiceProviderCallProcessingGetPolicyResponse18sp1 or an ErrorResponse.
 *         
 *         Replaced by: ServiceProviderCallProcessingGetPolicyRequest19sp1
 *
 * @see ServiceProviderCallProcessingGetPolicyResponse18sp1
 * @see ErrorResponse
 * @see ServiceProviderCallProcessingGetPolicyRequest19sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:17745","type":"sequence"}]
 */
class ServiceProviderCallProcessingGetPolicyRequest18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:17745
     * @MinLength 1
     * @MaxLength 30
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


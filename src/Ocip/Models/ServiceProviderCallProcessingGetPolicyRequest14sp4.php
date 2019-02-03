<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest14sp4
 *
 * Request the service provider level data associated with Call Processing
 *                 Policy. The response is either a ServiceProviderCallProcessingGetPolicyResponse14sp4 or an ErrorResponse.
 *                 Replaced By : ServiceProviderCallProcessingGetPolicyRequest15
 *
 * @see ServiceProviderCallProcessingGetPolicyResponse14sp4
 * @see ErrorResponse
 * @see ServiceProviderCallProcessingGetPolicyRequest15
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:3591","type":"sequence"}]
 */
class ServiceProviderCallProcessingGetPolicyRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3591
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


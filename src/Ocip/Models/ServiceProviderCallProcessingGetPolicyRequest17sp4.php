<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest17sp4
 *
 * Request the service provider level data associated with Call Processing
 *         Policy. The response is either a
 *         ServiceProviderCallProcessingGetPolicyResponse17sp4 or an ErrorResponse.
 *         Replaced By : ServiceProviderCallProcessingGetPolicyRequest18sp1
 */
class ServiceProviderCallProcessingGetPolicyRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


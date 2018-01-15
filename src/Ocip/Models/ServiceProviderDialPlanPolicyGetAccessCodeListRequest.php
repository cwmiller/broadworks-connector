<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDialPlanPolicyGetAccessCodeListRequest
 *
 * Request the Service Provider level data associated with Dial Plan Policy.
 *         The response is either a
 * ServiceProviderDialPlanPolicyGetAccessCodeListResponse
 *         or an ErrorResponse.
 */
class ServiceProviderDialPlanPolicyGetAccessCodeListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDialPlanPolicyGetRequest
 *
 * Request the Service Provider level data associated with Dial Plan Policy.
 *                 The response is either a ServiceProviderDialPlanPolicyGetResponse
 *                 or an ErrorResponse.
 *
 *                 Replaced by: ServiceProviderDialPlanPolicyGetRequest17
 *
 * @see ServiceProviderDialPlanPolicyGetResponse
 * @see ErrorResponse
 * @see ServiceProviderDialPlanPolicyGetRequest17
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:14678","type":"sequence"}]
 */
class ServiceProviderDialPlanPolicyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:14678
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceProfileAuthenticationPasswordRulesGetRequest
 *
 * Request to get the service provider level device profile authentication password
 * rule settings.
 *         The response is either a
 * ServiceProviderDeviceProfileAuthenticationPasswordRulesGetResponse or an
 * ErrorResponse.
 */
class ServiceProviderDeviceProfileAuthenticationPasswordRulesGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


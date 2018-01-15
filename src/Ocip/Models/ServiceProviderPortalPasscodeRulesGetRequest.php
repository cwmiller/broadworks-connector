<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPortalPasscodeRulesGetRequest
 *
 * Requests the service provider's passcode rules setting.
 *         The response is either ServiceProviderPortalPasscodeRulesGetResponse or
 * ErrorResponse.
 */
class ServiceProviderPortalPasscodeRulesGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


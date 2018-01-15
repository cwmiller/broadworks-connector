<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetPasscodeRulesRequest
 *
 * Requests the service provider's voice portal passcode rules setting.
 *         The response is either
 * ServiceProviderVoiceMessagingGroupGetPasscodeRulesResponse or ErrorResponse.
 *         Replaced By: ServiceProviderPortalPasscodeRulesGetRequest
 */
class ServiceProviderVoiceMessagingGroupGetPasscodeRulesRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


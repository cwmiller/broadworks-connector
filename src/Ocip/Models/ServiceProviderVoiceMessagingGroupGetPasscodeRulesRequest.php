<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetPasscodeRulesRequest
 *
 * Requests the service provider's voice portal passcode rules setting.
 *         The response is either
 * ServiceProviderVoiceMessagingGroupGetPasscodeRulesResponse or ErrorResponse.
 *         Replaced By: ServiceProviderPortalPasscodeRulesGetRequest
 *
 * @see ServiceProviderVoiceMessagingGroupGetPasscodeRulesResponse
 * @see ErrorResponse
 * @see ServiceProviderPortalPasscodeRulesGetRequest
 */
class ServiceProviderVoiceMessagingGroupGetPasscodeRulesRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
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


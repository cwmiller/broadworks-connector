<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderSIPAuthenticationPasswordRulesGetRequest
 *
 * Request to get the service provider level SIP authentication password rule settings.
 *         The response is either a ServiceProviderSIPAuthenticationPasswordRulesGetResponse or an ErrorResponse.
 *
 * @see ServiceProviderSIPAuthenticationPasswordRulesGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6815","type":"sequence"}]
 */
class ServiceProviderSIPAuthenticationPasswordRulesGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6815
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


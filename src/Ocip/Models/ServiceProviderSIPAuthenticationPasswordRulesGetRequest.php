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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:22386","type":"sequence"}]
 */
class ServiceProviderSIPAuthenticationPasswordRulesGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:22386
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


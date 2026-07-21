<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPasswordRulesGetRequest22
 *
 * Requests the service provider's password rules setting applicable to
 *         Administrators (Group and Department) and Users.
 *         The response is either ServiceProviderPasswordRulesGetResponse22 or ErrorResponse.
 *
 * @see ServiceProviderPasswordRulesGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:7670","type":"sequence"}]
 */
class ServiceProviderPasswordRulesGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:7670
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


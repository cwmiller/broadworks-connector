<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPasswordRulesGetRequest16
 *
 * Requests the service provider's password rules setting applicable to
 *         Administrators (Group and Department) and Users.
 *         The response is either ServiceProviderPasswordRulesGetResponse16 or ErrorResponse.
 *         
 *         Replaced by: ServiceProviderPasswordRulesGetRequest22 in AS data mode.
 *
 * @see ServiceProviderPasswordRulesGetResponse16
 * @see ErrorResponse
 * @see ServiceProviderPasswordRulesGetRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:7080","type":"sequence"}]
 */
class ServiceProviderPasswordRulesGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:7080
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


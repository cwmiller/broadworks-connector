<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPortalPasscodeRulesGetRequest19
 *
 * Requests the service provider's passcode rules setting.
 *         The response is either ServiceProviderPortalPasscodeRulesGetResponse19 or ErrorResponse.
 *         
 *         Replaced by: ServiceProviderPortalPasscodeRulesGetRequest22 in AS data mode.
 *
 * @see ServiceProviderPortalPasscodeRulesGetResponse19
 * @see ErrorResponse
 * @see ServiceProviderPortalPasscodeRulesGetRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:7137","type":"sequence"}]
 */
class ServiceProviderPortalPasscodeRulesGetRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:7137
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


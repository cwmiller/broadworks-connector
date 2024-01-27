<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPortalPasscodeRulesGetRequest22
 *
 * Requests the service provider's passcode rules setting.
 *         The response is either ServiceProviderPortalPasscodeRulesGetResponse22 or ErrorResponse.
 *
 * @see ServiceProviderPortalPasscodeRulesGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5446","type":"sequence"}]
 */
class ServiceProviderPortalPasscodeRulesGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:5446
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


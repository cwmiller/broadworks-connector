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
 * @Groups [{"id":"dcbd2c8b4418bae71f73d8ae679071f8:44","type":"sequence"}]
 */
class ServiceProviderPortalPasscodeRulesGetRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group dcbd2c8b4418bae71f73d8ae679071f8:44
     * @MinLength 1
     * @MaxLength 30
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


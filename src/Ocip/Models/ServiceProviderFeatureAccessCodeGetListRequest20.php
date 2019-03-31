<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderFeatureAccessCodeGetListRequest20
 *
 * Get the list of feature access codes for a service provider or enterprise.
 *                 The response is either a ServiceProviderFeatureAccessCodeGetListResponse20
 *                 or an ErrorResponse.
 *                 In release 20 the "Call Recording" FAC name is changed to
 *                 "Call Recording - Start".
 *                 Replaced by: ServiceProviderFeatureAccessCodeGetListRequest21
 *
 * @see ServiceProviderFeatureAccessCodeGetListResponse20
 * @see ErrorResponse
 * @see ServiceProviderFeatureAccessCodeGetListRequest21
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:34046","type":"sequence"}]
 */
class ServiceProviderFeatureAccessCodeGetListRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:34046
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


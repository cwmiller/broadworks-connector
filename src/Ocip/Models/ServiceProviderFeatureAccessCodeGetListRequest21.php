<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderFeatureAccessCodeGetListRequest21
 *
 * Get the list of feature access codes for a service provider or enterprise.
 *         The response is either a ServiceProviderFeatureAccessCodeGetListResponse21
 *         or an ErrorResponse. 
 *
 *         In release 20 the "Call Recording" FAC name is changed to 
 *         "Call Recording - Start".
 *
 * @see ServiceProviderFeatureAccessCodeGetListResponse21
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4276","type":"sequence"}]
 */
class ServiceProviderFeatureAccessCodeGetListRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:4276
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


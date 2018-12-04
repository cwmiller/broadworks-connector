<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderFeatureAccessCodeGetListRequest20
 *
 * Get the list of feature access codes for a service provider or enterprise.
 *         The response is either a ServiceProviderFeatureAccessCodeGetListResponse20
 *         or an ErrorResponse.
 *         In release 20 the "Call Recording" FAC name is changed to
 *         "Call Recording - Start".
 *         Replaced by: ServiceProviderFeatureAccessCodeGetListRequest21
 *
 * @see ServiceProviderFeatureAccessCodeGetListResponse20
 * @see ErrorResponse
 * @see ServiceProviderFeatureAccessCodeGetListRequest21
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:16341","type":"sequence"}]
 */
class ServiceProviderFeatureAccessCodeGetListRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:16341
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


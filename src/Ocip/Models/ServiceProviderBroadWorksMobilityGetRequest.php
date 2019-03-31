<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksMobilityGetRequest
 *
 * Get the service provider BroadWorks Mobility service settings.
 *                 The response is either a ServiceProviderBroadWorksMobilityGetResponse or an ErrorResponse.
 *                 Replaced by: ServiceProviderBroadWorksMobilityGetRequest19sp1
 *
 * @see ServiceProviderBroadWorksMobilityGetResponse
 * @see ErrorResponse
 * @see ServiceProviderBroadWorksMobilityGetRequest19sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:31345","type":"sequence"}]
 */
class ServiceProviderBroadWorksMobilityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:31345
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


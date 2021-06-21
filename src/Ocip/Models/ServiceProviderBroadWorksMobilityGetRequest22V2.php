<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksMobilityGetRequest22V2
 *
 * Get the service provider BroadWorks Mobility service settings.
 *         The response is either a ServiceProviderBroadWorksMobilityGetResponse22V2 or an ErrorResponse.
 *         Replaced by ServiceProviderBroadWorksMobilityGetRequest22V3.
 *
 * @see ServiceProviderBroadWorksMobilityGetResponse22V2
 * @see ErrorResponse
 * @see ServiceProviderBroadWorksMobilityGetRequest22V3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:17382","type":"sequence"}]
 */
class ServiceProviderBroadWorksMobilityGetRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:17382
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


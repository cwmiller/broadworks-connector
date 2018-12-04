<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetListRequest
 *
 * Requests a table of all the carriers defined in a specified service provider or enterprise.
 *         The response is either a ServiceProviderPreferredCarrierGetListResponse or an ErrorResponse.
 *
 * @see ServiceProviderPreferredCarrierGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"1384777ce7bd407156102bad44751987:226","type":"sequence"}]
 */
class ServiceProviderPreferredCarrierGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 1384777ce7bd407156102bad44751987:226
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderHPBXAlternateCarrierSelectionGetRequest
 *
 * Request to get the Alternate Carrier Selection parameters.
 *         The response is either a
 * ServiceProviderHPBXAlternateCarrierSelectionGetResponse or an ErrorResponse.
 *
 * @see ServiceProviderHPBXAlternateCarrierSelectionGetResponse
 * @see ErrorResponse
 */
class ServiceProviderHPBXAlternateCarrierSelectionGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }


}


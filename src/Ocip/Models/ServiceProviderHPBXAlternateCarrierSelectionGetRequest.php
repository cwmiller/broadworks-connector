<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderHPBXAlternateCarrierSelectionGetRequest
 *
 * Request to get the Alternate Carrier Selection parameters.
 *         The response is either a ServiceProviderHPBXAlternateCarrierSelectionGetResponse or an ErrorResponse.
 *
 * @see ServiceProviderHPBXAlternateCarrierSelectionGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4694","type":"sequence"}]
 */
class ServiceProviderHPBXAlternateCarrierSelectionGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:4694
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdviceOfChargeGetRequest
 *
 * Request to get the list of Advice of Charge service provider parameters.
 *         The response is either ServiceProviderAdviceOfChargeGetResponse or ErrorResponse.
 *
 * @see ServiceProviderAdviceOfChargeGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb1070190f79a86aa955448146b539c7:104","type":"sequence"}]
 */
class ServiceProviderAdviceOfChargeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group fb1070190f79a86aa955448146b539c7:104
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


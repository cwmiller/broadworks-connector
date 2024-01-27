<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAnswerConfirmationGetRequest
 *
 * Get a service provider or enterprise's answer confirmation settings.
 *         The response is either a ServiceProviderAnswerConfirmationGetResponse or an ErrorResponse.
 *         Replaced By: ServiceProviderAnswerConfirmationGetRequest16
 *
 * @see ServiceProviderAnswerConfirmationGetResponse
 * @see ErrorResponse
 * @see ServiceProviderAnswerConfirmationGetRequest16
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:17762","type":"sequence"}]
 */
class ServiceProviderAnswerConfirmationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17762
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


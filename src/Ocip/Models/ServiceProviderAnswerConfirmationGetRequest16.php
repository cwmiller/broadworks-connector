<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAnswerConfirmationGetRequest16
 *
 * Get a service provider or enterprise's answer confirmation settings.
 *         The response is either a ServiceProviderAnswerConfirmationGetResponse16
 * or an ErrorResponse.
 */
class ServiceProviderAnswerConfirmationGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


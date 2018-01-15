<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderSessionAdmissionControlWhiteListGetRequest
 *
 * Request to get the Service Provider Session Admission White List information.
 *         The response is either a
 * ServiceProviderSessionAdmissionControlWhiteListGetResponse or an ErrorResponse.
 */
class ServiceProviderSessionAdmissionControlWhiteListGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEnhancedCallLogsGetRequest
 *
 * Get the service provider's enhanced call log settings.
 *         The response is either a ServiceProviderEnhancedCallLogsGetResponse or
 * an ErrorResponse.
 */
class ServiceProviderEnhancedCallLogsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


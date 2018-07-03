<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEnhancedCallLogsGetRequest17sp4
 *
 * Get the service provider's enhanced call log settings.
 *         The response is either a ServiceProviderEnhancedCallLogsGetResponse17sp4
 * or an ErrorResponse.
 *         This command will return an ErrorResponse if DBS is used as the call log
 * server.
 *
 * @see ServiceProviderEnhancedCallLogsGetResponse17sp4
 * @see ErrorResponse
 * @see ErrorResponse
 */
class ServiceProviderEnhancedCallLogsGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


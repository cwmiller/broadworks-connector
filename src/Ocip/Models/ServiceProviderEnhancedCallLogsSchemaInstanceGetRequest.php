<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEnhancedCallLogsSchemaInstanceGetRequest
 *
 * Get the enhanced call log database schema instance associated with this 
 *       service provider.
 *       The response is either a ServiceProviderEnhancedCallLogsSchemaInstanceGetResponse or an ErrorResponse.
 *
 * @see ServiceProviderEnhancedCallLogsSchemaInstanceGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"1b1edb32782550c1a52523b734e3143d:155","type":"sequence"}]
 */
class ServiceProviderEnhancedCallLogsSchemaInstanceGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 1b1edb32782550c1a52523b734e3143d:155
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


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
 * @Groups [{"id":"1b5ee40628a3f2b1bcab94a53dec91e7:156","type":"sequence"}]
 */
class ServiceProviderEnhancedCallLogsSchemaInstanceGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:156
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


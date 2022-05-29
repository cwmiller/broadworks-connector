<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEnhancedCallLogsGetRequest17sp4
 *
 * Get the service provider's enhanced call log settings.
 *         The response is either a ServiceProviderEnhancedCallLogsGetResponse17sp4 or an ErrorResponse.
 *         This command will return an ErrorResponse if DBS is used as the call log server.
 *
 * @see ServiceProviderEnhancedCallLogsGetResponse17sp4
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"f6b3702edb5f67fa12c2c426d98657db:104","type":"sequence"}]
 */
class ServiceProviderEnhancedCallLogsGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f6b3702edb5f67fa12c2c426d98657db:104
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksCommunicatorModifyRequest
 *
 * Request to modify the Configuration URL. The response is either a
 * SuccessResponse or an ErrorResponse.
 */
class ServiceProviderBroadWorksCommunicatorModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName configurationServerURL
     * @var string|null
     */
    private $configurationServerURL = null;

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

    /**
     * Getter for configurationServerURL
     *
     * @ElementName configurationServerURL
     * @return string|null
     */
    public function getConfigurationServerURL()
    {
        return $this->configurationServerURL;
    }

    /**
     * Setter for configurationServerURL
     *
     * @ElementName configurationServerURL
     * @param string|null $configurationServerURL
     * @return $this
     */
    public function setConfigurationServerURL($configurationServerURL)
    {
        $this->configurationServerURL = $configurationServerURL;
        return $this;
    }


}


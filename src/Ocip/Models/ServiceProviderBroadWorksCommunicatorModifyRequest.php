<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksCommunicatorModifyRequest
 *
 * Request to modify the Configuration URL. The response is either a
 * SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderBroadWorksCommunicatorModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName configurationServerURL
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $configurationServerURL = null;

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

    /**
     * Getter for configurationServerURL
     *
     * @return string|null
     */
    public function getConfigurationServerURL()
    {
        return $this->configurationServerURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configurationServerURL;
    }

    /**
     * Setter for configurationServerURL
     *
     * @param string|null $configurationServerURL
     * @return $this
     */
    public function setConfigurationServerURL($configurationServerURL)
    {
        if ($configurationServerURL === null) {
            $this->configurationServerURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->configurationServerURL = $configurationServerURL;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfigurationServerURL()
    {
        $this->configurationServerURL = null;
        return $this;
    }


}


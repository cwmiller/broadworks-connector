<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCPEConfigSetConfigFileRequest
 *
 * Request to set a new service provider default configuration file for a device
 * type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         When the element configFile is set to nil, the configuration file
 * defined
 *         at the parent level is used.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderCPEConfigSetConfigFileRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName configFile
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $configFile = null;

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
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string|null $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Getter for configFile
     *
     * @ElementName configFile
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getConfigFile()
    {
        return $this->configFile;
    }

    /**
     * Setter for configFile
     *
     * @ElementName configFile
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileResource|null|\CWM\BroadWorksConnector\Ocip\Nil $configFile
     * @return $this
     */
    public function setConfigFile(\CWM\BroadWorksConnector\Ocip\Models\FileResource $configFile)
    {
        $this->configFile = $configFile;
        return $this;
    }


}


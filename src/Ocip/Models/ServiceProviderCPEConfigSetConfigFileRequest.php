<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCPEConfigSetConfigFileRequest
 *
 * Request to set a new service provider default configuration file for a device type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         When the element configFile is set to nil, the configuration file defined
 *         at the parent level is used.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:2147","type":"sequence"}]
 */
class ServiceProviderCPEConfigSetConfigFileRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:2147
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName deviceType
     * @Type string
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:2147
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName configFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileResource
     * @Nillable
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:2147
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $configFile = null;

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
     * Getter for deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceType()
    {
        $this->deviceType = null;
        return $this;
    }

    /**
     * Getter for configFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    public function getConfigFile()
    {
        return $this->configFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configFile;
    }

    /**
     * Setter for configFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileResource|null $configFile
     * @return $this
     */
    public function setConfigFile(\CWM\BroadWorksConnector\Ocip\Models\FileResource $configFile)
    {
        if ($configFile === null) {
            $this->configFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->configFile = $configFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfigFile()
    {
        $this->configFile = null;
        return $this;
    }


}


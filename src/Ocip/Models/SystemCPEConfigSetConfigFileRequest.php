<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigSetConfigFileRequest
 *
 * Request to set a new system default configuration file for a device type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCPEConfigSetConfigFileRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName configFile
     * @Type string
     * @var string|null
     */
    private $configFile = null;

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
     * @return string
     */
    public function getConfigFile()
    {
        return $this->configFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configFile;
    }

    /**
     * Setter for configFile
     *
     * @param string $configFile
     * @return $this
     */
    public function setConfigFile($configFile)
    {
        $this->configFile = $configFile;
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


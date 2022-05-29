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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7219","type":"sequence"}]
 */
class SystemCPEConfigSetConfigFileRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7219
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName configFile
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7219
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $configFile = null;

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


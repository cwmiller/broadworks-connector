<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigRebuildConfigFileRequest
 *
 * Rebuild the system default config file for the specified device type.
 *         If the device type is not specified, all files for all device types in the system are rebuilt.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7129","type":"sequence"}]
 */
class SystemCPEConfigRebuildConfigFileRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7129
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName rebuildType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceConfigRebuildType
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7129
     * @var \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceConfigRebuildType|null
     */
    private $rebuildType = null;

    /**
     * @ElementName force
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7129
     * @var bool|null
     */
    private $force = null;

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
     * Getter for rebuildType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceConfigRebuildType
     */
    public function getRebuildType()
    {
        return $this->rebuildType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rebuildType;
    }

    /**
     * Setter for rebuildType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceConfigRebuildType $rebuildType
     * @return $this
     */
    public function setRebuildType(\CWM\BroadWorksConnector\Ocip\Models\CPEDeviceConfigRebuildType $rebuildType)
    {
        $this->rebuildType = $rebuildType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRebuildType()
    {
        $this->rebuildType = null;
        return $this;
    }

    /**
     * Getter for force
     *
     * @return bool
     */
    public function getForce()
    {
        return $this->force instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->force;
    }

    /**
     * Setter for force
     *
     * @param bool $force
     * @return $this
     */
    public function setForce($force)
    {
        $this->force = $force;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForce()
    {
        $this->force = null;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigRebuildConfigFileRequest
 *
 * Rebuild the system default config file for the specified device type.
 *         If the device type is not specified, all files for all device types in
 * the system are rebuilt.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCPEConfigRebuildConfigFileRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName rebuildType
     * @var string|null
     */
    private $rebuildType = null;

    /**
     * @ElementName force
     * @var bool|null
     */
    private $force = null;

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
     * Getter for rebuildType
     *
     * @ElementName rebuildType
     * @return string|null
     */
    public function getRebuildType()
    {
        return $this->rebuildType;
    }

    /**
     * Setter for rebuildType
     *
     * @ElementName rebuildType
     * @param string|null $rebuildType
     * @return $this
     */
    public function setRebuildType($rebuildType)
    {
        $this->rebuildType = $rebuildType;
        return $this;
    }

    /**
     * Getter for force
     *
     * @ElementName force
     * @return bool|null
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Setter for force
     *
     * @ElementName force
     * @param bool|null $force
     * @return $this
     */
    public function setForce($force)
    {
        $this->force = $force;
        return $this;
    }


}


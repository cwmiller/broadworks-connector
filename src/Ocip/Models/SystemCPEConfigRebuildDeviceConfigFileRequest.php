<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigRebuildDeviceConfigFileRequest
 *
 * Rebuild the config file for a specified device.
 *         The following elements are only used in AS data mode:
 *           force
 *           
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCPEConfigRebuildDeviceConfigFileRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName force
     * @var bool|null
     */
    private $force = null;

    /**
     * Getter for deviceName
     *
     * @ElementName deviceName
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @ElementName deviceName
     * @param string|null $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
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


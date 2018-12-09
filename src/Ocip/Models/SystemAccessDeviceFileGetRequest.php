<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceFileGetRequest
 *
 * Request to get a device profile file.
 *           The response is either SystemAccessDeviceFileGetResponse or ErrorResponse.
 *           Replaced By: SystemAccessDeviceFileGetRequest14sp8
 *
 * @see SystemAccessDeviceFileGetResponse
 * @see ErrorResponse
 * @see SystemAccessDeviceFileGetRequest14sp8
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:16885","type":"sequence"}]
 */
class SystemAccessDeviceFileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:16885
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName fileType
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:16885
     * @var string|null
     */
    private $fileType = null;

    /**
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
        return $this;
    }

    /**
     * Getter for fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileType;
    }

    /**
     * Setter for fileType
     *
     * @param string $fileType
     * @return $this
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileType()
    {
        $this->fileType = null;
        return $this;
    }


}


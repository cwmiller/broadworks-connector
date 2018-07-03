<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileDeleteRequest
 *
 * Request to delete a sip device type file.
 *             The response is either SuccessResponse or ErrorResponse.
 *             Replaced By: SystemSIPDeviceTypeFileDeleteRequest14sp8
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemSIPDeviceTypeFileDeleteRequest14sp8
 */
class SystemSIPDeviceTypeFileDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName fileType
     * @var string|null
     */
    private $fileType = null;

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
     * Getter for fileType
     *
     * @ElementName fileType
     * @return string|null
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Setter for fileType
     *
     * @ElementName fileType
     * @param string|null $fileType
     * @return $this
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }


}


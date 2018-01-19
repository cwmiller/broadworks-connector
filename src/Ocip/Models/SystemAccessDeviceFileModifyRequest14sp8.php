<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceFileModifyRequest14sp8
 *
 * Request to modify a specified system access device file.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 *         The following elements are only used in AS data mode:
 *           extendedCaptureEnabled
 */
class SystemAccessDeviceFileModifyRequest14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName fileFormat
     * @var string|null
     */
    private $fileFormat = null;

    /**
     * @ElementName fileSource
     * @var string|null
     */
    private $fileSource = null;

    /**
     * @ElementName uploadFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    private $uploadFile = null;

    /**
     * @ElementName extendedCaptureEnabled
     * @var bool|null
     */
    private $extendedCaptureEnabled = null;

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
     * Getter for fileFormat
     *
     * @ElementName fileFormat
     * @return string|null
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * Setter for fileFormat
     *
     * @ElementName fileFormat
     * @param string|null $fileFormat
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
        return $this;
    }

    /**
     * Getter for fileSource
     *
     * @ElementName fileSource
     * @return string|null
     */
    public function getFileSource()
    {
        return $this->fileSource;
    }

    /**
     * Setter for fileSource
     *
     * @ElementName fileSource
     * @param string|null $fileSource
     * @return $this
     */
    public function setFileSource($fileSource)
    {
        $this->fileSource = $fileSource;
        return $this;
    }

    /**
     * Getter for uploadFile
     *
     * @ElementName uploadFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    public function getUploadFile()
    {
        return $this->uploadFile;
    }

    /**
     * Setter for uploadFile
     *
     * @ElementName uploadFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileResource|null $uploadFile
     * @return $this
     */
    public function setUploadFile($uploadFile)
    {
        $this->uploadFile = $uploadFile;
        return $this;
    }

    /**
     * Getter for extendedCaptureEnabled
     *
     * @ElementName extendedCaptureEnabled
     * @return bool|null
     */
    public function getExtendedCaptureEnabled()
    {
        return $this->extendedCaptureEnabled;
    }

    /**
     * Setter for extendedCaptureEnabled
     *
     * @ElementName extendedCaptureEnabled
     * @param bool|null $extendedCaptureEnabled
     * @return $this
     */
    public function setExtendedCaptureEnabled($extendedCaptureEnabled)
    {
        $this->extendedCaptureEnabled = $extendedCaptureEnabled;
        return $this;
    }


}

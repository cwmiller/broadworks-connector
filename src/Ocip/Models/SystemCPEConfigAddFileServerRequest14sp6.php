<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigAddFileServerRequest14sp6
 *
 * Add a device CPE config file server.
 *         The following elements are only used in AS data mode:
 *           extendedCaptureFileRepositoryName
 *           
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6974","type":"sequence"}]
 */
class SystemCPEConfigAddFileServerRequest14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6974
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName fileRepositoryName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6974
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $fileRepositoryName = null;

    /**
     * @ElementName cpeFileDirectory
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6974
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $cpeFileDirectory = null;

    /**
     * @ElementName extendedCaptureFileRepositoryName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6974
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $extendedCaptureFileRepositoryName = null;

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
     * Getter for fileRepositoryName
     *
     * @return string
     */
    public function getFileRepositoryName()
    {
        return $this->fileRepositoryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRepositoryName;
    }

    /**
     * Setter for fileRepositoryName
     *
     * @param string $fileRepositoryName
     * @return $this
     */
    public function setFileRepositoryName($fileRepositoryName)
    {
        $this->fileRepositoryName = $fileRepositoryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRepositoryName()
    {
        $this->fileRepositoryName = null;
        return $this;
    }

    /**
     * Getter for cpeFileDirectory
     *
     * @return string
     */
    public function getCpeFileDirectory()
    {
        return $this->cpeFileDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cpeFileDirectory;
    }

    /**
     * Setter for cpeFileDirectory
     *
     * @param string $cpeFileDirectory
     * @return $this
     */
    public function setCpeFileDirectory($cpeFileDirectory)
    {
        $this->cpeFileDirectory = $cpeFileDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCpeFileDirectory()
    {
        $this->cpeFileDirectory = null;
        return $this;
    }

    /**
     * Getter for extendedCaptureFileRepositoryName
     *
     * @return string
     */
    public function getExtendedCaptureFileRepositoryName()
    {
        return $this->extendedCaptureFileRepositoryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedCaptureFileRepositoryName;
    }

    /**
     * Setter for extendedCaptureFileRepositoryName
     *
     * @param string $extendedCaptureFileRepositoryName
     * @return $this
     */
    public function setExtendedCaptureFileRepositoryName($extendedCaptureFileRepositoryName)
    {
        $this->extendedCaptureFileRepositoryName = $extendedCaptureFileRepositoryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedCaptureFileRepositoryName()
    {
        $this->extendedCaptureFileRepositoryName = null;
        return $this;
    }


}


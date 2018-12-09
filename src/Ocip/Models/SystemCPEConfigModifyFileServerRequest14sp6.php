<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigModifyFileServerRequest14sp6
 *
 * Modify a device CPE config file server.
 *           
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:6286","type":"sequence"}]
 */
class SystemCPEConfigModifyFileServerRequest14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:6286
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName fileRepositoryName
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:6286
     * @var string|null
     */
    private $fileRepositoryName = null;

    /**
     * @ElementName cpeFileDirectory
     * @Type string
     * @Nillable
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:6286
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $cpeFileDirectory = null;

    /**
     * @ElementName extendedCaptureFileRepositoryName
     * @Type string
     * @Nillable
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:6286
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getCpeFileDirectory()
    {
        return $this->cpeFileDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cpeFileDirectory;
    }

    /**
     * Setter for cpeFileDirectory
     *
     * @param string|null $cpeFileDirectory
     * @return $this
     */
    public function setCpeFileDirectory($cpeFileDirectory)
    {
        if ($cpeFileDirectory === null) {
            $this->cpeFileDirectory = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->cpeFileDirectory = $cpeFileDirectory;
        }
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
     * @return string|null
     */
    public function getExtendedCaptureFileRepositoryName()
    {
        return $this->extendedCaptureFileRepositoryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedCaptureFileRepositoryName;
    }

    /**
     * Setter for extendedCaptureFileRepositoryName
     *
     * @param string|null $extendedCaptureFileRepositoryName
     * @return $this
     */
    public function setExtendedCaptureFileRepositoryName($extendedCaptureFileRepositoryName)
    {
        if ($extendedCaptureFileRepositoryName === null) {
            $this->extendedCaptureFileRepositoryName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->extendedCaptureFileRepositoryName = $extendedCaptureFileRepositoryName;
        }
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


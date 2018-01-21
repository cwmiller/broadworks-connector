<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigModifyFileServerRequest14sp6
 *
 * Modify a device CPE config file server.
 *           
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCPEConfigModifyFileServerRequest14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName fileRepositoryName
     * @var string|null
     */
    private $fileRepositoryName = null;

    /**
     * @ElementName cpeFileDirectory
     * @var string|null
     */
    private $cpeFileDirectory = null;

    /**
     * @ElementName extendedCaptureFileRepositoryName
     * @var string|null
     */
    private $extendedCaptureFileRepositoryName = null;

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
     * Getter for fileRepositoryName
     *
     * @ElementName fileRepositoryName
     * @return string|null
     */
    public function getFileRepositoryName()
    {
        return $this->fileRepositoryName;
    }

    /**
     * Setter for fileRepositoryName
     *
     * @ElementName fileRepositoryName
     * @param string|null $fileRepositoryName
     * @return $this
     */
    public function setFileRepositoryName($fileRepositoryName)
    {
        $this->fileRepositoryName = $fileRepositoryName;
        return $this;
    }

    /**
     * Getter for cpeFileDirectory
     *
     * @ElementName cpeFileDirectory
     * @return string|null
     */
    public function getCpeFileDirectory()
    {
        return $this->cpeFileDirectory;
    }

    /**
     * Setter for cpeFileDirectory
     *
     * @ElementName cpeFileDirectory
     * @param string|null $cpeFileDirectory
     * @return $this
     */
    public function setCpeFileDirectory($cpeFileDirectory)
    {
        $this->cpeFileDirectory = $cpeFileDirectory;
        return $this;
    }

    /**
     * Getter for extendedCaptureFileRepositoryName
     *
     * @ElementName extendedCaptureFileRepositoryName
     * @return string|null
     */
    public function getExtendedCaptureFileRepositoryName()
    {
        return $this->extendedCaptureFileRepositoryName;
    }

    /**
     * Setter for extendedCaptureFileRepositoryName
     *
     * @ElementName extendedCaptureFileRepositoryName
     * @param string|null $extendedCaptureFileRepositoryName
     * @return $this
     */
    public function setExtendedCaptureFileRepositoryName($extendedCaptureFileRepositoryName)
    {
        $this->extendedCaptureFileRepositoryName = $extendedCaptureFileRepositoryName;
        return $this;
    }


}


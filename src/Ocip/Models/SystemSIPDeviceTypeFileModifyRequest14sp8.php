<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileModifyRequest14sp8
 *
 * Request to modify a sip device type file.
 *           The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeFileModifyRequest14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName fileFormat
     * @var string|null
     */
    private $fileFormat = null;

    /**
     * @ElementName allowFileCustomization
     * @var bool|null
     */
    private $allowFileCustomization = null;

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
     * @ElementName useHttpDigestAuthentication
     * @var bool|null
     */
    private $useHttpDigestAuthentication = null;

    /**
     * @ElementName macBasedFileAuthentication
     * @var bool|null
     */
    private $macBasedFileAuthentication = null;

    /**
     * @ElementName userNamePasswordFileAuthentication
     * @var bool|null
     */
    private $userNamePasswordFileAuthentication = null;

    /**
     * @ElementName macInNonRequestURI
     * @var bool|null
     */
    private $macInNonRequestURI = null;

    /**
     * @ElementName macFormatInNonRequestURI
     * @var string|null
     */
    private $macFormatInNonRequestURI = null;

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
     * Getter for allowFileCustomization
     *
     * @ElementName allowFileCustomization
     * @return bool|null
     */
    public function getAllowFileCustomization()
    {
        return $this->allowFileCustomization;
    }

    /**
     * Setter for allowFileCustomization
     *
     * @ElementName allowFileCustomization
     * @param bool|null $allowFileCustomization
     * @return $this
     */
    public function setAllowFileCustomization($allowFileCustomization)
    {
        $this->allowFileCustomization = $allowFileCustomization;
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
     * Getter for useHttpDigestAuthentication
     *
     * @ElementName useHttpDigestAuthentication
     * @return bool|null
     */
    public function getUseHttpDigestAuthentication()
    {
        return $this->useHttpDigestAuthentication;
    }

    /**
     * Setter for useHttpDigestAuthentication
     *
     * @ElementName useHttpDigestAuthentication
     * @param bool|null $useHttpDigestAuthentication
     * @return $this
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication)
    {
        $this->useHttpDigestAuthentication = $useHttpDigestAuthentication;
        return $this;
    }

    /**
     * Getter for macBasedFileAuthentication
     *
     * @ElementName macBasedFileAuthentication
     * @return bool|null
     */
    public function getMacBasedFileAuthentication()
    {
        return $this->macBasedFileAuthentication;
    }

    /**
     * Setter for macBasedFileAuthentication
     *
     * @ElementName macBasedFileAuthentication
     * @param bool|null $macBasedFileAuthentication
     * @return $this
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication)
    {
        $this->macBasedFileAuthentication = $macBasedFileAuthentication;
        return $this;
    }

    /**
     * Getter for userNamePasswordFileAuthentication
     *
     * @ElementName userNamePasswordFileAuthentication
     * @return bool|null
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return $this->userNamePasswordFileAuthentication;
    }

    /**
     * Setter for userNamePasswordFileAuthentication
     *
     * @ElementName userNamePasswordFileAuthentication
     * @param bool|null $userNamePasswordFileAuthentication
     * @return $this
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication)
    {
        $this->userNamePasswordFileAuthentication = $userNamePasswordFileAuthentication;
        return $this;
    }

    /**
     * Getter for macInNonRequestURI
     *
     * @ElementName macInNonRequestURI
     * @return bool|null
     */
    public function getMacInNonRequestURI()
    {
        return $this->macInNonRequestURI;
    }

    /**
     * Setter for macInNonRequestURI
     *
     * @ElementName macInNonRequestURI
     * @param bool|null $macInNonRequestURI
     * @return $this
     */
    public function setMacInNonRequestURI($macInNonRequestURI)
    {
        $this->macInNonRequestURI = $macInNonRequestURI;
        return $this;
    }

    /**
     * Getter for macFormatInNonRequestURI
     *
     * @ElementName macFormatInNonRequestURI
     * @return string|null
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI;
    }

    /**
     * Setter for macFormatInNonRequestURI
     *
     * @ElementName macFormatInNonRequestURI
     * @param string|null $macFormatInNonRequestURI
     * @return $this
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI)
    {
        $this->macFormatInNonRequestURI = $macFormatInNonRequestURI;
        return $this;
    }


}


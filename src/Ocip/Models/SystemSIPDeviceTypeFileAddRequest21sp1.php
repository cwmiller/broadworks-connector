<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileAddRequest21sp1
 *
 * Request to add a sip device type file.
 *         The response is either SuccessResponse or ErrorResponse.
 *     
 *         The following logic applies to these elements:
 *           macInCert
 *           macInNonRequestURI
 *           The two elements are mutually exclusive.
 *           When both are set to true, the command fails.
 *  
 *           Replaced by: SystemSIPDeviceTypeFileAddRequest22 in AS data mode.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see macInNonRequest
 * @see SystemSIPDeviceTypeFileAddRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:12915","type":"sequence"}]
 */
class SystemSIPDeviceTypeFileAddRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName fileFormat
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $fileFormat = null;

    /**
     * @ElementName remoteFileFormat
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $remoteFileFormat = null;

    /**
     * @ElementName fileCategory
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory|null
     */
    protected $fileCategory = null;

    /**
     * @ElementName fileCustomization
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization|null
     */
    protected $fileCustomization = null;

    /**
     * @ElementName fileSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode|null
     */
    protected $fileSource = null;

    /**
     * @ElementName uploadFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileResource
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    protected $uploadFile = null;

    /**
     * @ElementName useHttpDigestAuthentication
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var bool|null
     */
    protected $useHttpDigestAuthentication = null;

    /**
     * @ElementName macBasedFileAuthentication
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var bool|null
     */
    protected $macBasedFileAuthentication = null;

    /**
     * @ElementName userNamePasswordFileAuthentication
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var bool|null
     */
    protected $userNamePasswordFileAuthentication = null;

    /**
     * @ElementName macInNonRequestURI
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var bool|null
     */
    protected $macInNonRequestURI = null;

    /**
     * @ElementName macInCert
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var bool|null
     */
    protected $macInCert = null;

    /**
     * @ElementName macFormatInNonRequestURI
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $macFormatInNonRequestURI = null;

    /**
     * @ElementName allowHttp
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var bool|null
     */
    protected $allowHttp = null;

    /**
     * @ElementName allowHttps
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var bool|null
     */
    protected $allowHttps = null;

    /**
     * @ElementName allowTftp
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var bool|null
     */
    protected $allowTftp = null;

    /**
     * @ElementName enableCaching
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var bool|null
     */
    protected $enableCaching = null;

    /**
     * @ElementName allowUploadFromDevice
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var bool|null
     */
    protected $allowUploadFromDevice = null;

    /**
     * @ElementName defaultExtendedFileCaptureMode
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:12915
     * @var bool|null
     */
    protected $defaultExtendedFileCaptureMode = null;

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
     * Getter for fileFormat
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->fileFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileFormat;
    }

    /**
     * Setter for fileFormat
     *
     * @param string $fileFormat
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileFormat()
    {
        $this->fileFormat = null;
        return $this;
    }

    /**
     * Getter for remoteFileFormat
     *
     * @return string
     */
    public function getRemoteFileFormat()
    {
        return $this->remoteFileFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->remoteFileFormat;
    }

    /**
     * Setter for remoteFileFormat
     *
     * @param string $remoteFileFormat
     * @return $this
     */
    public function setRemoteFileFormat($remoteFileFormat)
    {
        $this->remoteFileFormat = $remoteFileFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRemoteFileFormat()
    {
        $this->remoteFileFormat = null;
        return $this;
    }

    /**
     * Getter for fileCategory
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory
     */
    public function getFileCategory()
    {
        return $this->fileCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileCategory;
    }

    /**
     * Setter for fileCategory
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory $fileCategory
     * @return $this
     */
    public function setFileCategory(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory $fileCategory)
    {
        $this->fileCategory = $fileCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileCategory()
    {
        $this->fileCategory = null;
        return $this;
    }

    /**
     * Getter for fileCustomization
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization
     */
    public function getFileCustomization()
    {
        return $this->fileCustomization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileCustomization;
    }

    /**
     * Setter for fileCustomization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization $fileCustomization
     * @return $this
     */
    public function setFileCustomization(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization $fileCustomization)
    {
        $this->fileCustomization = $fileCustomization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileCustomization()
    {
        $this->fileCustomization = null;
        return $this;
    }

    /**
     * Getter for fileSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode
     */
    public function getFileSource()
    {
        return $this->fileSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileSource;
    }

    /**
     * Setter for fileSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode $fileSource
     * @return $this
     */
    public function setFileSource(\CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode $fileSource)
    {
        $this->fileSource = $fileSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileSource()
    {
        $this->fileSource = null;
        return $this;
    }

    /**
     * Getter for uploadFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileResource
     */
    public function getUploadFile()
    {
        return $this->uploadFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->uploadFile;
    }

    /**
     * Setter for uploadFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileResource $uploadFile
     * @return $this
     */
    public function setUploadFile(\CWM\BroadWorksConnector\Ocip\Models\FileResource $uploadFile)
    {
        $this->uploadFile = $uploadFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUploadFile()
    {
        $this->uploadFile = null;
        return $this;
    }

    /**
     * Getter for useHttpDigestAuthentication
     *
     * @return bool
     */
    public function getUseHttpDigestAuthentication()
    {
        return $this->useHttpDigestAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useHttpDigestAuthentication;
    }

    /**
     * Setter for useHttpDigestAuthentication
     *
     * @param bool $useHttpDigestAuthentication
     * @return $this
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication)
    {
        $this->useHttpDigestAuthentication = $useHttpDigestAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseHttpDigestAuthentication()
    {
        $this->useHttpDigestAuthentication = null;
        return $this;
    }

    /**
     * Getter for macBasedFileAuthentication
     *
     * @return bool
     */
    public function getMacBasedFileAuthentication()
    {
        return $this->macBasedFileAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macBasedFileAuthentication;
    }

    /**
     * Setter for macBasedFileAuthentication
     *
     * @param bool $macBasedFileAuthentication
     * @return $this
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication)
    {
        $this->macBasedFileAuthentication = $macBasedFileAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacBasedFileAuthentication()
    {
        $this->macBasedFileAuthentication = null;
        return $this;
    }

    /**
     * Getter for userNamePasswordFileAuthentication
     *
     * @return bool
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return $this->userNamePasswordFileAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userNamePasswordFileAuthentication;
    }

    /**
     * Setter for userNamePasswordFileAuthentication
     *
     * @param bool $userNamePasswordFileAuthentication
     * @return $this
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication)
    {
        $this->userNamePasswordFileAuthentication = $userNamePasswordFileAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserNamePasswordFileAuthentication()
    {
        $this->userNamePasswordFileAuthentication = null;
        return $this;
    }

    /**
     * Getter for macInNonRequestURI
     *
     * @return bool
     */
    public function getMacInNonRequestURI()
    {
        return $this->macInNonRequestURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macInNonRequestURI;
    }

    /**
     * Setter for macInNonRequestURI
     *
     * @param bool $macInNonRequestURI
     * @return $this
     */
    public function setMacInNonRequestURI($macInNonRequestURI)
    {
        $this->macInNonRequestURI = $macInNonRequestURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacInNonRequestURI()
    {
        $this->macInNonRequestURI = null;
        return $this;
    }

    /**
     * Getter for macInCert
     *
     * @return bool
     */
    public function getMacInCert()
    {
        return $this->macInCert instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macInCert;
    }

    /**
     * Setter for macInCert
     *
     * @param bool $macInCert
     * @return $this
     */
    public function setMacInCert($macInCert)
    {
        $this->macInCert = $macInCert;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacInCert()
    {
        $this->macInCert = null;
        return $this;
    }

    /**
     * Getter for macFormatInNonRequestURI
     *
     * @return string
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macFormatInNonRequestURI;
    }

    /**
     * Setter for macFormatInNonRequestURI
     *
     * @param string $macFormatInNonRequestURI
     * @return $this
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI)
    {
        $this->macFormatInNonRequestURI = $macFormatInNonRequestURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacFormatInNonRequestURI()
    {
        $this->macFormatInNonRequestURI = null;
        return $this;
    }

    /**
     * Getter for allowHttp
     *
     * @return bool
     */
    public function getAllowHttp()
    {
        return $this->allowHttp instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowHttp;
    }

    /**
     * Setter for allowHttp
     *
     * @param bool $allowHttp
     * @return $this
     */
    public function setAllowHttp($allowHttp)
    {
        $this->allowHttp = $allowHttp;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowHttp()
    {
        $this->allowHttp = null;
        return $this;
    }

    /**
     * Getter for allowHttps
     *
     * @return bool
     */
    public function getAllowHttps()
    {
        return $this->allowHttps instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowHttps;
    }

    /**
     * Setter for allowHttps
     *
     * @param bool $allowHttps
     * @return $this
     */
    public function setAllowHttps($allowHttps)
    {
        $this->allowHttps = $allowHttps;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowHttps()
    {
        $this->allowHttps = null;
        return $this;
    }

    /**
     * Getter for allowTftp
     *
     * @return bool
     */
    public function getAllowTftp()
    {
        return $this->allowTftp instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowTftp;
    }

    /**
     * Setter for allowTftp
     *
     * @param bool $allowTftp
     * @return $this
     */
    public function setAllowTftp($allowTftp)
    {
        $this->allowTftp = $allowTftp;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowTftp()
    {
        $this->allowTftp = null;
        return $this;
    }

    /**
     * Getter for enableCaching
     *
     * @return bool
     */
    public function getEnableCaching()
    {
        return $this->enableCaching instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCaching;
    }

    /**
     * Setter for enableCaching
     *
     * @param bool $enableCaching
     * @return $this
     */
    public function setEnableCaching($enableCaching)
    {
        $this->enableCaching = $enableCaching;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCaching()
    {
        $this->enableCaching = null;
        return $this;
    }

    /**
     * Getter for allowUploadFromDevice
     *
     * @return bool
     */
    public function getAllowUploadFromDevice()
    {
        return $this->allowUploadFromDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowUploadFromDevice;
    }

    /**
     * Setter for allowUploadFromDevice
     *
     * @param bool $allowUploadFromDevice
     * @return $this
     */
    public function setAllowUploadFromDevice($allowUploadFromDevice)
    {
        $this->allowUploadFromDevice = $allowUploadFromDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowUploadFromDevice()
    {
        $this->allowUploadFromDevice = null;
        return $this;
    }

    /**
     * Getter for defaultExtendedFileCaptureMode
     *
     * @return bool
     */
    public function getDefaultExtendedFileCaptureMode()
    {
        return $this->defaultExtendedFileCaptureMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultExtendedFileCaptureMode;
    }

    /**
     * Setter for defaultExtendedFileCaptureMode
     *
     * @param bool $defaultExtendedFileCaptureMode
     * @return $this
     */
    public function setDefaultExtendedFileCaptureMode($defaultExtendedFileCaptureMode)
    {
        $this->defaultExtendedFileCaptureMode = $defaultExtendedFileCaptureMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultExtendedFileCaptureMode()
    {
        $this->defaultExtendedFileCaptureMode = null;
        return $this;
    }
}


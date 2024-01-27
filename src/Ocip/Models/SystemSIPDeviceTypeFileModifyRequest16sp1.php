<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileModifyRequest16sp1
 *
 * Request to modify a sip device type file.
 *           The response is either SuccessResponse or ErrorResponse.
 *
 *           The following logic applies to these elements:
 *             macInCert
 *             macInNonRequestURI
 *             The two elements are mutually exclusive.
 *             When both are set to true, the command fails.
 *             When macInCert is set to true, macInNonRequestURI will be reset to false.
 *             When macInNonRequestURI is set to true, macInCert will be reset to false.
 *             
 *           The following elements are ignored in XS data mode:
 *             bearerFileAuthentication
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see macInNonRequest
 * @see macInNonRequest
 * @see macInNonRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:17307","type":"sequence"}]
 */
class SystemSIPDeviceTypeFileModifyRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName fileFormat
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $fileFormat = null;

    /**
     * @ElementName fileCustomization
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization|null
     */
    protected $fileCustomization = null;

    /**
     * @ElementName fileSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode|null
     */
    protected $fileSource = null;

    /**
     * @ElementName uploadFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileResource
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    protected $uploadFile = null;

    /**
     * @ElementName useHttpDigestAuthentication
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var bool|null
     */
    protected $useHttpDigestAuthentication = null;

    /**
     * @ElementName macBasedFileAuthentication
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var bool|null
     */
    protected $macBasedFileAuthentication = null;

    /**
     * @ElementName userNamePasswordFileAuthentication
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var bool|null
     */
    protected $userNamePasswordFileAuthentication = null;

    /**
     * @ElementName macInNonRequestURI
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var bool|null
     */
    protected $macInNonRequestURI = null;

    /**
     * @ElementName macInCert
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var bool|null
     */
    protected $macInCert = null;

    /**
     * @ElementName macFormatInNonRequestURI
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $macFormatInNonRequestURI = null;

    /**
     * @ElementName allowHttp
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var bool|null
     */
    protected $allowHttp = null;

    /**
     * @ElementName allowHttps
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var bool|null
     */
    protected $allowHttps = null;

    /**
     * @ElementName allowTftp
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var bool|null
     */
    protected $allowTftp = null;

    /**
     * @ElementName enableCaching
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var bool|null
     */
    protected $enableCaching = null;

    /**
     * @ElementName allowUploadFromDevice
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var bool|null
     */
    protected $allowUploadFromDevice = null;

    /**
     * @ElementName defaultExtendedFileCaptureMode
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var bool|null
     */
    protected $defaultExtendedFileCaptureMode = null;

    /**
     * @ElementName bearerFileAuthentication
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17307
     * @var bool|null
     */
    protected $bearerFileAuthentication = null;

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
     * @return string|null
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macFormatInNonRequestURI;
    }

    /**
     * Setter for macFormatInNonRequestURI
     *
     * @param string|null $macFormatInNonRequestURI
     * @return $this
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        if ($macFormatInNonRequestURI === null) {
            $this->macFormatInNonRequestURI = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->macFormatInNonRequestURI = $macFormatInNonRequestURI;
        }
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

    /**
     * Getter for bearerFileAuthentication
     *
     * @return bool
     */
    public function getBearerFileAuthentication()
    {
        return $this->bearerFileAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bearerFileAuthentication;
    }

    /**
     * Setter for bearerFileAuthentication
     *
     * @param bool $bearerFileAuthentication
     * @return $this
     */
    public function setBearerFileAuthentication($bearerFileAuthentication)
    {
        $this->bearerFileAuthentication = $bearerFileAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBearerFileAuthentication()
    {
        $this->bearerFileAuthentication = null;
        return $this;
    }
}


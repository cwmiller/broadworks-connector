<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetResponse22
 *
 * Response to SystemSIPDeviceTypeFileGetRequest22.
 *           Take note:
 *
 *           1. accessUrl may have undefined content.
 *           When it is the case, undefined content is put between [].
 *           It may also be set to "Error Access FQDN Not Provisioned" when the access FQDN is not set,
 *           or "Error Access Context Name Not Provisioned" when the context name is not set.
 *
 *           2. repositoryUrl may be set to "DEVICE_CONFIGURATION_FILE_REPOSITORY_MISSING", if there is no file repository defined.
 *
 * @see SystemSIPDeviceTypeFileGetRequest22
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17040","type":"sequence"}]
 */
class SystemSIPDeviceTypeFileGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName remoteFileFormat
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    private $remoteFileFormat = null;

    /**
     * @ElementName fileCategory
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory22
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory22|null
     */
    private $fileCategory = null;

    /**
     * @ElementName fileCustomization
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization|null
     */
    private $fileCustomization = null;

    /**
     * @ElementName fileSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode|null
     */
    private $fileSource = null;

    /**
     * @ElementName configurationFileName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $configurationFileName = null;

    /**
     * @ElementName useHttpDigestAuthentication
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var bool|null
     */
    private $useHttpDigestAuthentication = null;

    /**
     * @ElementName macBasedFileAuthentication
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var bool|null
     */
    private $macBasedFileAuthentication = null;

    /**
     * @ElementName userNamePasswordFileAuthentication
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var bool|null
     */
    private $userNamePasswordFileAuthentication = null;

    /**
     * @ElementName macInCert
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var bool|null
     */
    private $macInCert = null;

    /**
     * @ElementName macInNonRequestURI
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var bool|null
     */
    private $macInNonRequestURI = null;

    /**
     * @ElementName macFormatInNonRequestURI
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $macFormatInNonRequestURI = null;

    /**
     * @ElementName accessUrl
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $accessUrl = null;

    /**
     * @ElementName repositoryUrl
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $repositoryUrl = null;

    /**
     * @ElementName templateUrl
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $templateUrl = null;

    /**
     * @ElementName allowHttp
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var bool|null
     */
    private $allowHttp = null;

    /**
     * @ElementName allowHttps
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var bool|null
     */
    private $allowHttps = null;

    /**
     * @ElementName allowTftp
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var bool|null
     */
    private $allowTftp = null;

    /**
     * @ElementName enableCaching
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var bool|null
     */
    private $enableCaching = null;

    /**
     * @ElementName allowUploadFromDevice
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var bool|null
     */
    private $allowUploadFromDevice = null;

    /**
     * @ElementName defaultExtendedFileCaptureMode
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17040
     * @var bool|null
     */
    private $defaultExtendedFileCaptureMode = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory22
     */
    public function getFileCategory()
    {
        return $this->fileCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileCategory;
    }

    /**
     * Setter for fileCategory
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory22 $fileCategory
     * @return $this
     */
    public function setFileCategory(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory22 $fileCategory)
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
     * Getter for configurationFileName
     *
     * @return string
     */
    public function getConfigurationFileName()
    {
        return $this->configurationFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configurationFileName;
    }

    /**
     * Setter for configurationFileName
     *
     * @param string $configurationFileName
     * @return $this
     */
    public function setConfigurationFileName($configurationFileName)
    {
        $this->configurationFileName = $configurationFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfigurationFileName()
    {
        $this->configurationFileName = null;
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
     * Getter for accessUrl
     *
     * @return string
     */
    public function getAccessUrl()
    {
        return $this->accessUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessUrl;
    }

    /**
     * Setter for accessUrl
     *
     * @param string $accessUrl
     * @return $this
     */
    public function setAccessUrl($accessUrl)
    {
        $this->accessUrl = $accessUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessUrl()
    {
        $this->accessUrl = null;
        return $this;
    }

    /**
     * Getter for repositoryUrl
     *
     * @return string
     */
    public function getRepositoryUrl()
    {
        return $this->repositoryUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->repositoryUrl;
    }

    /**
     * Setter for repositoryUrl
     *
     * @param string $repositoryUrl
     * @return $this
     */
    public function setRepositoryUrl($repositoryUrl)
    {
        $this->repositoryUrl = $repositoryUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRepositoryUrl()
    {
        $this->repositoryUrl = null;
        return $this;
    }

    /**
     * Getter for templateUrl
     *
     * @return string
     */
    public function getTemplateUrl()
    {
        return $this->templateUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateUrl;
    }

    /**
     * Setter for templateUrl
     *
     * @param string $templateUrl
     * @return $this
     */
    public function setTemplateUrl($templateUrl)
    {
        $this->templateUrl = $templateUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateUrl()
    {
        $this->templateUrl = null;
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


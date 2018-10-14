<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetResponse16sp1
 *
 * Replaced by: SystemSIPDeviceTypeFileGetResponse18.
 *           Response to SystemSIPDeviceTypeFileGetRequest16sp1.
 *
 * @see SystemSIPDeviceTypeFileGetResponse18
 * @see SystemSIPDeviceTypeFileGetRequest16sp1
 */
class SystemSIPDeviceTypeFileGetResponse16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName remoteFileFormat
     * @var string|null
     */
    private $remoteFileFormat = null;

    /**
     * @ElementName fileCategory
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory|null
     */
    private $fileCategory = null;

    /**
     * @ElementName fileCustomization
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization|null
     */
    private $fileCustomization = null;

    /**
     * @ElementName fileSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode|null
     */
    private $fileSource = null;

    /**
     * @ElementName configurationFileName
     * @var string|null
     */
    private $configurationFileName = null;

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
     * @ElementName accessUrl
     * @var string|null
     */
    private $accessUrl = null;

    /**
     * @ElementName repositoryUrl
     * @var string|null
     */
    private $repositoryUrl = null;

    /**
     * @ElementName templateUrl
     * @var string|null
     */
    private $templateUrl = null;

    /**
     * Getter for remoteFileFormat
     *
     * @ElementName remoteFileFormat
     * @return string|null
     */
    public function getRemoteFileFormat()
    {
        return $this->remoteFileFormat;
    }

    /**
     * Setter for remoteFileFormat
     *
     * @ElementName remoteFileFormat
     * @param string|null $remoteFileFormat
     * @return $this
     */
    public function setRemoteFileFormat($remoteFileFormat)
    {
        $this->remoteFileFormat = $remoteFileFormat;
        return $this;
    }

    /**
     * Getter for fileCategory
     *
     * @ElementName fileCategory
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory|null
     */
    public function getFileCategory()
    {
        return $this->fileCategory;
    }

    /**
     * Setter for fileCategory
     *
     * @ElementName fileCategory
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory|null $fileCategory
     * @return $this
     */
    public function setFileCategory(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory $fileCategory)
    {
        $this->fileCategory = $fileCategory;
        return $this;
    }

    /**
     * Getter for fileCustomization
     *
     * @ElementName fileCustomization
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization|null
     */
    public function getFileCustomization()
    {
        return $this->fileCustomization;
    }

    /**
     * Setter for fileCustomization
     *
     * @ElementName fileCustomization
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization|null $fileCustomization
     * @return $this
     */
    public function setFileCustomization(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization $fileCustomization)
    {
        $this->fileCustomization = $fileCustomization;
        return $this;
    }

    /**
     * Getter for fileSource
     *
     * @ElementName fileSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode|null
     */
    public function getFileSource()
    {
        return $this->fileSource;
    }

    /**
     * Setter for fileSource
     *
     * @ElementName fileSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode|null $fileSource
     * @return $this
     */
    public function setFileSource(\CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode $fileSource)
    {
        $this->fileSource = $fileSource;
        return $this;
    }

    /**
     * Getter for configurationFileName
     *
     * @ElementName configurationFileName
     * @return string|null
     */
    public function getConfigurationFileName()
    {
        return $this->configurationFileName;
    }

    /**
     * Setter for configurationFileName
     *
     * @ElementName configurationFileName
     * @param string|null $configurationFileName
     * @return $this
     */
    public function setConfigurationFileName($configurationFileName)
    {
        $this->configurationFileName = $configurationFileName;
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

    /**
     * Getter for accessUrl
     *
     * @ElementName accessUrl
     * @return string|null
     */
    public function getAccessUrl()
    {
        return $this->accessUrl;
    }

    /**
     * Setter for accessUrl
     *
     * @ElementName accessUrl
     * @param string|null $accessUrl
     * @return $this
     */
    public function setAccessUrl($accessUrl)
    {
        $this->accessUrl = $accessUrl;
        return $this;
    }

    /**
     * Getter for repositoryUrl
     *
     * @ElementName repositoryUrl
     * @return string|null
     */
    public function getRepositoryUrl()
    {
        return $this->repositoryUrl;
    }

    /**
     * Setter for repositoryUrl
     *
     * @ElementName repositoryUrl
     * @param string|null $repositoryUrl
     * @return $this
     */
    public function setRepositoryUrl($repositoryUrl)
    {
        $this->repositoryUrl = $repositoryUrl;
        return $this;
    }

    /**
     * Getter for templateUrl
     *
     * @ElementName templateUrl
     * @return string|null
     */
    public function getTemplateUrl()
    {
        return $this->templateUrl;
    }

    /**
     * Setter for templateUrl
     *
     * @ElementName templateUrl
     * @param string|null $templateUrl
     * @return $this
     */
    public function setTemplateUrl($templateUrl)
    {
        $this->templateUrl = $templateUrl;
        return $this;
    }


}


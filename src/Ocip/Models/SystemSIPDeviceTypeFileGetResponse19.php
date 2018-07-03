<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetResponse19
 *
 * Response to SystemSIPDeviceTypeFileGetRequest19.          
 *           Take note: 
 *           
 *           1. accessUrl may have undefined content. 
 *           When it is the case, undefined content is put between [].
 *           It may also be set to "Error Access FQDN Not Provisioned" when the
 * access FQDN is not set,
 *           or "Error Access Context Name Not Provisioned" when the context name
 * is not set.
 *           2. repositoryUrl may be set to
 * "DEVICE_CONFIGURATION_FILE_REPOSITORY_MISSING", if there is no file repository
 * defined.
 *           
 *           Replaced by: SystemSIPDeviceTypeFileGetResponse20 in AS data mode
 *
 * @see SystemSIPDeviceTypeFileGetRequest19
 * @see SystemSIPDeviceTypeFileGetResponse20
 */
class SystemSIPDeviceTypeFileGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName remoteFileFormat
     * @var string|null
     */
    private $remoteFileFormat = null;

    /**
     * @ElementName fileCategory
     * @var string|null
     */
    private $fileCategory = null;

    /**
     * @ElementName fileCustomization
     * @var string|null
     */
    private $fileCustomization = null;

    /**
     * @ElementName fileSource
     * @var string|null
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
     * @ElementName allowHttp
     * @var bool|null
     */
    private $allowHttp = null;

    /**
     * @ElementName allowHttps
     * @var bool|null
     */
    private $allowHttps = null;

    /**
     * @ElementName allowTftp
     * @var bool|null
     */
    private $allowTftp = null;

    /**
     * @ElementName enableCaching
     * @var bool|null
     */
    private $enableCaching = null;

    /**
     * @ElementName allowUploadFromDevice
     * @var bool|null
     */
    private $allowUploadFromDevice = null;

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
     * @return string|null
     */
    public function getFileCategory()
    {
        return $this->fileCategory;
    }

    /**
     * Setter for fileCategory
     *
     * @ElementName fileCategory
     * @param string|null $fileCategory
     * @return $this
     */
    public function setFileCategory($fileCategory)
    {
        $this->fileCategory = $fileCategory;
        return $this;
    }

    /**
     * Getter for fileCustomization
     *
     * @ElementName fileCustomization
     * @return string|null
     */
    public function getFileCustomization()
    {
        return $this->fileCustomization;
    }

    /**
     * Setter for fileCustomization
     *
     * @ElementName fileCustomization
     * @param string|null $fileCustomization
     * @return $this
     */
    public function setFileCustomization($fileCustomization)
    {
        $this->fileCustomization = $fileCustomization;
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

    /**
     * Getter for allowHttp
     *
     * @ElementName allowHttp
     * @return bool|null
     */
    public function getAllowHttp()
    {
        return $this->allowHttp;
    }

    /**
     * Setter for allowHttp
     *
     * @ElementName allowHttp
     * @param bool|null $allowHttp
     * @return $this
     */
    public function setAllowHttp($allowHttp)
    {
        $this->allowHttp = $allowHttp;
        return $this;
    }

    /**
     * Getter for allowHttps
     *
     * @ElementName allowHttps
     * @return bool|null
     */
    public function getAllowHttps()
    {
        return $this->allowHttps;
    }

    /**
     * Setter for allowHttps
     *
     * @ElementName allowHttps
     * @param bool|null $allowHttps
     * @return $this
     */
    public function setAllowHttps($allowHttps)
    {
        $this->allowHttps = $allowHttps;
        return $this;
    }

    /**
     * Getter for allowTftp
     *
     * @ElementName allowTftp
     * @return bool|null
     */
    public function getAllowTftp()
    {
        return $this->allowTftp;
    }

    /**
     * Setter for allowTftp
     *
     * @ElementName allowTftp
     * @param bool|null $allowTftp
     * @return $this
     */
    public function setAllowTftp($allowTftp)
    {
        $this->allowTftp = $allowTftp;
        return $this;
    }

    /**
     * Getter for enableCaching
     *
     * @ElementName enableCaching
     * @return bool|null
     */
    public function getEnableCaching()
    {
        return $this->enableCaching;
    }

    /**
     * Setter for enableCaching
     *
     * @ElementName enableCaching
     * @param bool|null $enableCaching
     * @return $this
     */
    public function setEnableCaching($enableCaching)
    {
        $this->enableCaching = $enableCaching;
        return $this;
    }

    /**
     * Getter for allowUploadFromDevice
     *
     * @ElementName allowUploadFromDevice
     * @return bool|null
     */
    public function getAllowUploadFromDevice()
    {
        return $this->allowUploadFromDevice;
    }

    /**
     * Setter for allowUploadFromDevice
     *
     * @ElementName allowUploadFromDevice
     * @param bool|null $allowUploadFromDevice
     * @return $this
     */
    public function setAllowUploadFromDevice($allowUploadFromDevice)
    {
        $this->allowUploadFromDevice = $allowUploadFromDevice;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetResponse14sp8
 *
 * Response to SystemSIPDeviceTypeFileGetRequest14sp8.
 */
class SystemSIPDeviceTypeFileGetResponse14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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


}


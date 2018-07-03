<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceFileGetResponse20
 *
 * Response to SystemAccessDeviceFileGetRequest20.
 *
 * @see SystemAccessDeviceFileGetRequest20
 */
class SystemAccessDeviceFileGetResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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
     * @ElementName extendedCaptureEnabled
     * @var bool|null
     */
    private $extendedCaptureEnabled = null;

    /**
     * @ElementName extendedCaptureURL
     * @var string|null
     */
    private $extendedCaptureURL = null;

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
     * Getter for extendedCaptureEnabled
     *
     * @ElementName extendedCaptureEnabled
     * @return bool|null
     */
    public function getExtendedCaptureEnabled()
    {
        return $this->extendedCaptureEnabled;
    }

    /**
     * Setter for extendedCaptureEnabled
     *
     * @ElementName extendedCaptureEnabled
     * @param bool|null $extendedCaptureEnabled
     * @return $this
     */
    public function setExtendedCaptureEnabled($extendedCaptureEnabled)
    {
        $this->extendedCaptureEnabled = $extendedCaptureEnabled;
        return $this;
    }

    /**
     * Getter for extendedCaptureURL
     *
     * @ElementName extendedCaptureURL
     * @return string|null
     */
    public function getExtendedCaptureURL()
    {
        return $this->extendedCaptureURL;
    }

    /**
     * Setter for extendedCaptureURL
     *
     * @ElementName extendedCaptureURL
     * @param string|null $extendedCaptureURL
     * @return $this
     */
    public function setExtendedCaptureURL($extendedCaptureURL)
    {
        $this->extendedCaptureURL = $extendedCaptureURL;
        return $this;
    }


}


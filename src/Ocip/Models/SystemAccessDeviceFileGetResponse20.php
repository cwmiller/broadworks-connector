<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceFileGetResponse20
 *
 * Response to SystemAccessDeviceFileGetRequest20.
 *
 * @see SystemAccessDeviceFileGetRequest20
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:995","type":"sequence"}]
 */
class SystemAccessDeviceFileGetResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:995
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode|null
     */
    private $fileSource = null;

    /**
     * @ElementName configurationFileName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:995
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $configurationFileName = null;

    /**
     * @ElementName accessUrl
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:995
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $accessUrl = null;

    /**
     * @ElementName repositoryUrl
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:995
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $repositoryUrl = null;

    /**
     * @ElementName templateUrl
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:995
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $templateUrl = null;

    /**
     * @ElementName extendedCaptureEnabled
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:995
     * @var bool|null
     */
    private $extendedCaptureEnabled = null;

    /**
     * @ElementName extendedCaptureURL
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:995
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $extendedCaptureURL = null;

    /**
     * Getter for fileSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode
     */
    public function getFileSource()
    {
        return $this->fileSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileSource;
    }

    /**
     * Setter for fileSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode $fileSource
     * @return $this
     */
    public function setFileSource(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode $fileSource)
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
     * Getter for extendedCaptureEnabled
     *
     * @return bool
     */
    public function getExtendedCaptureEnabled()
    {
        return $this->extendedCaptureEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedCaptureEnabled;
    }

    /**
     * Setter for extendedCaptureEnabled
     *
     * @param bool $extendedCaptureEnabled
     * @return $this
     */
    public function setExtendedCaptureEnabled($extendedCaptureEnabled)
    {
        $this->extendedCaptureEnabled = $extendedCaptureEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedCaptureEnabled()
    {
        $this->extendedCaptureEnabled = null;
        return $this;
    }

    /**
     * Getter for extendedCaptureURL
     *
     * @return string
     */
    public function getExtendedCaptureURL()
    {
        return $this->extendedCaptureURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedCaptureURL;
    }

    /**
     * Setter for extendedCaptureURL
     *
     * @param string $extendedCaptureURL
     * @return $this
     */
    public function setExtendedCaptureURL($extendedCaptureURL)
    {
        $this->extendedCaptureURL = $extendedCaptureURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedCaptureURL()
    {
        $this->extendedCaptureURL = null;
        return $this;
    }


}


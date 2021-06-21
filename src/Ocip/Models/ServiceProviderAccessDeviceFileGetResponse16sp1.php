<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceFileGetResponse16sp1
 *
 * Response to ServiceProviderAccessDeviceFileGetRequest16sp1.
 *         
 *         Replaced by: ServiceProviderAccessDeviceFileGetResponse20
 *
 * @see ServiceProviderAccessDeviceFileGetRequest16sp1
 * @see ServiceProviderAccessDeviceFileGetResponse20
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:16710","type":"sequence"}]
 */
class ServiceProviderAccessDeviceFileGetResponse16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16710
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode|null
     */
    private $fileSource = null;

    /**
     * @ElementName configurationFileName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16710
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $configurationFileName = null;

    /**
     * @ElementName accessUrl
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16710
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $accessUrl = null;

    /**
     * @ElementName repositoryUrl
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16710
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $repositoryUrl = null;

    /**
     * @ElementName templateUrl
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16710
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $templateUrl = null;

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


}


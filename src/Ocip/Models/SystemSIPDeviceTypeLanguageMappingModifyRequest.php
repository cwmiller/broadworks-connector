<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeLanguageMappingModifyRequest
 *
 * Request to modify the device language name that is mapped to a BroadWorks
 * language name. The request can be used to map many languages.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSIPDeviceTypeLanguageMappingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName languageMapping
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementLanguageMapping[]
     */
    private $languageMapping = array(
        
    );

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
     * Getter for languageMapping
     *
     * @ElementName languageMapping
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementLanguageMapping[]
     */
    public function getLanguageMapping()
    {
        return $this->languageMapping;
    }

    /**
     * Setter for languageMapping
     *
     * @ElementName languageMapping
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementLanguageMapping[] $languageMapping
     * @return $this
     */
    public function setLanguageMapping(array $languageMapping)
    {
        $this->languageMapping = $languageMapping;
        return $this;
    }

    /**
     * Adder for languageMapping
     *
     * @ElementName languageMapping
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementLanguageMapping $languageMapping
     * @return $this
     */
    public function addLanguageMapping($languageMapping)
    {
        $this->languageMapping []= $languageMapping;
        return $this;
    }


}


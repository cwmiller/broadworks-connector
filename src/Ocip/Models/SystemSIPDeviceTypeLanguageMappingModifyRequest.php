<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeLanguageMappingModifyRequest
 *
 * Request to modify the device language name that is mapped to a BroadWorks language name. The request can be used to map many languages.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:17535","type":"sequence"}]
 */
class SystemSIPDeviceTypeLanguageMappingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:17535
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName languageMapping
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementLanguageMapping
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:17535
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementLanguageMapping[]
     */
    protected $languageMapping = [
        
    ];

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
     * Getter for languageMapping
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementLanguageMapping[]
     */
    public function getLanguageMapping()
    {
        return $this->languageMapping instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->languageMapping;
    }

    /**
     * Setter for languageMapping
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementLanguageMapping[] $languageMapping
     * @return $this
     */
    public function setLanguageMapping(array $languageMapping)
    {
        $this->languageMapping = $languageMapping;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguageMapping()
    {
        $this->languageMapping = null;
        return $this;
    }

    /**
     * Adder for languageMapping
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementLanguageMapping $languageMapping
     * @return $this
     */
    public function addLanguageMapping($languageMapping)
    {
        $this->languageMapping[] = $languageMapping;
        return $this;
    }
}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyGetRequest
 *
 * Request to get the associated device types and tagsets for a given device family. 
 *         
 *         The response is either SystemDeviceFamilyGetResponse or ErrorResponse.
 *
 * @see SystemDeviceFamilyGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7601","type":"sequence"}]
 */
class SystemDeviceFamilyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceFamilyName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:7601
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $deviceFamilyName = null;

    /**
     * Getter for deviceFamilyName
     *
     * @return string
     */
    public function getDeviceFamilyName()
    {
        return $this->deviceFamilyName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceFamilyName;
    }

    /**
     * Setter for deviceFamilyName
     *
     * @param string $deviceFamilyName
     * @return $this
     */
    public function setDeviceFamilyName($deviceFamilyName)
    {
        $this->deviceFamilyName = $deviceFamilyName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceFamilyName()
    {
        $this->deviceFamilyName = null;
        return $this;
    }
}


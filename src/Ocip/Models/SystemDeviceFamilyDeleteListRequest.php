<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyDeleteListRequest
 *
 * Request to delete a device family.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7511","type":"sequence"}]
 */
class SystemDeviceFamilyDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceFamilyName
     * @Type string
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:7511
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $deviceFamilyName = [
        
    ];

    /**
     * Getter for deviceFamilyName
     *
     * @return string[]
     */
    public function getDeviceFamilyName()
    {
        return $this->deviceFamilyName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceFamilyName;
    }

    /**
     * Setter for deviceFamilyName
     *
     * @param string[] $deviceFamilyName
     * @return $this
     */
    public function setDeviceFamilyName(array $deviceFamilyName)
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

    /**
     * Adder for deviceFamilyName
     *
     * @param string $deviceFamilyName
     * @return $this
     */
    public function addDeviceFamilyName(string $deviceFamilyName)
    {
        $this->deviceFamilyName[] = $deviceFamilyName;
        return $this;
    }
}


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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7398","type":"sequence"}]
 */
class SystemDeviceFamilyDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceFamilyName
     * @Type string
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7398
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $deviceFamilyName = array(
        
    );

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


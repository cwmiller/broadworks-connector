<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceTypeGetListResponse
 *
 * Response to SystemAccessDeviceTypeGetListRequest.
 *
 * @see SystemAccessDeviceTypeGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1790","type":"sequence"}]
 */
class SystemAccessDeviceTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1790
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $deviceType = array(
        
    );

    /**
     * Getter for deviceType
     *
     * @return string[]
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string[] $deviceType
     * @return $this
     */
    public function setDeviceType(array $deviceType)
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
     * Adder for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function addDeviceType(string $deviceType)
    {
        $this->deviceType[] = $deviceType;
        return $this;
    }


}


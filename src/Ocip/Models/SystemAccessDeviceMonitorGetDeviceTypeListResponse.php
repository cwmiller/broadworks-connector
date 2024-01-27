<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceMonitorGetDeviceTypeListResponse
 *
 * Response to SystemAccessDeviceMonitorGetDeviceTypeListRequest.
 *
 * @see SystemAccessDeviceMonitorGetDeviceTypeListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1649","type":"sequence"}]
 */
class SystemAccessDeviceMonitorGetDeviceTypeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1649
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $deviceType = [
        
    ];

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


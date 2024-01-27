<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMGCPDeviceTypeGetRequest
 *
 * Request to get a mgcp device type.
 *         See Also: SystemDeviceTypeGetRequest
 *         The response is either SystemMGCPDeviceTypeGetResponse or ErrorResponse.
 *
 * @see SystemDeviceTypeGetRequest
 * @see SystemMGCPDeviceTypeGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12325","type":"sequence"}]
 */
class SystemMGCPDeviceTypeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:12325
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

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
}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeLanguageMappingGetListRequest
 *
 * Request to get the list of device language names mapped to BroadWorks language
 * names, per-device type.
 *         The response is either SystemSIPDeviceTypeLanguageMappingGetListResponse
 * or ErrorResponse.
 */
class SystemSIPDeviceTypeLanguageMappingGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

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


}


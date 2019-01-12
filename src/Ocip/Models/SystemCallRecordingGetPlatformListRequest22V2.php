<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformListRequest22V2
 *
 * Requests the list of all system-level call recording platforms and all reseller level call recording platforms.  
 * 		If an excludeReseller is specified, returns all the system-level call recording platforms only. 
 *         If a resellerId is specified, returns all the system-level call recording platforms and the given reseller's call recording platforms. 
 *         If a reseller administrator sends the request and resellerId is not specified, the administrator's resellerId is used.
 *         The response is either SystemCallRecordingGetPlatformListResponse22V2 or ErrorResponse.
 *
 * @see SystemCallRecordingGetPlatformListResponse22V2
 * @see ErrorResponse
 * @Groups [{"id":"9741e074fbfeb4c7312bfa4dfbaee3d3:148","type":"choice"}]
 */
class SystemCallRecordingGetPlatformListRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName excludeReseller
     * @Type bool
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:148
     * @var bool|null
     */
    private $excludeReseller = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:148
     * @var string|null
     */
    private $resellerId = null;

    /**
     * Getter for excludeReseller
     *
     * @return bool
     */
    public function getExcludeReseller()
    {
        return $this->excludeReseller instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludeReseller;
    }

    /**
     * Setter for excludeReseller
     *
     * @param bool $excludeReseller
     * @return $this
     */
    public function setExcludeReseller($excludeReseller)
    {
        $this->excludeReseller = $excludeReseller;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludeReseller()
    {
        $this->excludeReseller = null;
        return $this;
    }

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }


}


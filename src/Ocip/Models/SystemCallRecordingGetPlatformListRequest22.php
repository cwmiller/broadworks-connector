<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformListRequest22
 *
 * Requests the list of all system-level call recording platforms and all reseller level call recording platforms.  
 * 		If an excludeReseller is specified, returns all the system-level call recording platforms only. 
 *         If a resellerId is specified, returns all the system-level call recording platforms and the given reseller's call recording platforms. 
 *         If a reseller administrator sends the request and resellerId is not specified, the administrator's resellerId is used.
 *         The response is either SystemCallRecordingGetPlatformListResponse22 or ErrorResponse.
 *         
 *         Replaced by: SystemCallRecordingGetPlatformListRequest22V2
 *
 * @see SystemCallRecordingGetPlatformListResponse22
 * @see ErrorResponse
 * @see SystemCallRecordingGetPlatformListRequest22V2
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:24548","type":"choice"}]
 */
class SystemCallRecordingGetPlatformListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName excludeReseller
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:24548
     * @var bool|null
     */
    private $excludeReseller = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:24548
     * @MinLength 1
     * @MaxLength 30
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


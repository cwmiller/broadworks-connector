<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetGetListRequest22
 *
 * Request to get the list of custom configuration tag sets managed by the Device Management System. 
 *         If excludeReseller is set, only system level tag sets are returned. 
 *         If resellerId is specified, all system level tag sets and the tag sets in the reseller are returned. 
 *         If reseller administrator sends the request, resellerId is not specified, the administrator's resellerId is used. 
 *         If neither excludeReseller nor resellerId is specified, all system level and reseller level tag sets are returned. 
 *         
 *         The response is either SystemDeviceManagementTagSetGetListResponse22 or ErrorResponse.
 *
 * @see SystemDeviceManagementTagSetGetListResponse22
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8329","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:8330","type":"choice"}]}]
 */
class SystemDeviceManagementTagSetGetListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName excludeReseller
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:8330
     * @var bool|null
     */
    protected $excludeReseller = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:8330
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

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


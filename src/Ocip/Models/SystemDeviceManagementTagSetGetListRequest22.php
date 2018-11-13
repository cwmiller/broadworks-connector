<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetGetListRequest22
 *
 * Request to get the list of custom configuration tag sets managed by the Device
 * Management System. 
 *         If excludeReseller is set, only system level tag sets are returned. 
 *         If resellerId is specified, all system level tag sets and the tag sets
 * in the reseller are returned. 
 *         If reseller administrator sends the request, resellerId is not
 * specified, the administrator's resellerId is used. 
 *         If neither excludeReseller nor resellerId is specified, all system level
 * and reseller level tag sets are returned. 
 *         
 *         The response is either SystemDeviceManagementTagSetGetListResponse22 or
 * ErrorResponse.
 *
 * @see SystemDeviceManagementTagSetGetListResponse22
 * @see ErrorResponse
 */
class SystemDeviceManagementTagSetGetListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName excludeReseller
     * @Type bool
     * @var bool|null
     */
    private $excludeReseller = null;

    /**
     * @ElementName resellerId
     * @Type string
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


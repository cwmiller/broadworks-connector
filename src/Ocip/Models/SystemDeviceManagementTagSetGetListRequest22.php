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
 */
class SystemDeviceManagementTagSetGetListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName excludeReseller
     * @var bool|null
     */
    private $excludeReseller = null;

    /**
     * @ElementName resellerId
     * @var string|null
     */
    private $resellerId = null;

    /**
     * Getter for excludeReseller
     *
     * @ElementName excludeReseller
     * @return bool|null
     */
    public function getExcludeReseller()
    {
        return $this->excludeReseller;
    }

    /**
     * Setter for excludeReseller
     *
     * @ElementName excludeReseller
     * @param bool|null $excludeReseller
     * @return $this
     */
    public function setExcludeReseller($excludeReseller)
    {
        $this->excludeReseller = $excludeReseller;
        return $this;
    }

    /**
     * Getter for resellerId
     *
     * @ElementName resellerId
     * @return string|null
     */
    public function getResellerId()
    {
        return $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @ElementName resellerId
     * @param string|null $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceUnlinkDeviceListRequest
 *
 * Request to unlink one or more leaf access devices from a tree device.
 *         A leaf device is a device associated with a device type that has the option
 *         supportLinks set to "Support Link to Device" or "Support Link to Device and User".  It can 
 *         be linked to only one tree device.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1395","type":"sequence"}]
 */
class GroupAccessDeviceUnlinkDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName leafDeviceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey
     * @Array
     * @Group 4b0e7857796c636464362260a2f8e5ee:1395
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[]
     */
    protected $leafDeviceKey = [
        
    ];

    /**
     * Getter for leafDeviceKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[]
     */
    public function getLeafDeviceKey()
    {
        return $this->leafDeviceKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->leafDeviceKey;
    }

    /**
     * Setter for leafDeviceKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[] $leafDeviceKey
     * @return $this
     */
    public function setLeafDeviceKey(array $leafDeviceKey)
    {
        $this->leafDeviceKey = $leafDeviceKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLeafDeviceKey()
    {
        $this->leafDeviceKey = null;
        return $this;
    }

    /**
     * Adder for leafDeviceKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey $leafDeviceKey
     * @return $this
     */
    public function addLeafDeviceKey($leafDeviceKey)
    {
        $this->leafDeviceKey[] = $leafDeviceKey;
        return $this;
    }
}


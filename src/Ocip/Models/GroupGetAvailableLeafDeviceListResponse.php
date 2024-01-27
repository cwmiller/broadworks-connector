<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetAvailableLeafDeviceListResponse
 *
 * Response to GroupGetAvailableLeafDeviceListRequest.
 *         Replaced by: GroupGetAvailableLeafDeviceListResponse22.
 *
 * @see GroupGetAvailableLeafDeviceListRequest
 * @see GroupGetAvailableLeafDeviceListResponse22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:10107","type":"sequence"}]
 */
class GroupGetAvailableLeafDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName leafDeviceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:10107
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


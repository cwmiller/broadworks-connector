<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetAvailableTreeDeviceListResponse
 *
 * Response to GroupGetAvailableTreeDeviceListRequest.
 *
 * @see GroupGetAvailableTreeDeviceListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5770","type":"sequence"}]
 */
class GroupGetAvailableTreeDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName treeDeviceInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5770
     * @var \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo[]
     */
    protected $treeDeviceInfo = [
        
    ];

    /**
     * Getter for treeDeviceInfo
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo[]
     */
    public function getTreeDeviceInfo()
    {
        return $this->treeDeviceInfo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treeDeviceInfo;
    }

    /**
     * Setter for treeDeviceInfo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo[] $treeDeviceInfo
     * @return $this
     */
    public function setTreeDeviceInfo(array $treeDeviceInfo)
    {
        $this->treeDeviceInfo = $treeDeviceInfo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreeDeviceInfo()
    {
        $this->treeDeviceInfo = null;
        return $this;
    }

    /**
     * Adder for treeDeviceInfo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo $treeDeviceInfo
     * @return $this
     */
    public function addTreeDeviceInfo($treeDeviceInfo)
    {
        $this->treeDeviceInfo[] = $treeDeviceInfo;
        return $this;
    }
}


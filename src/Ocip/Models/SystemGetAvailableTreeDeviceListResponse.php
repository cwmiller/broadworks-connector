<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGetAvailableTreeDeviceListResponse
 *
 * Response to SystemGetAvailableTreeDeviceListRequest.
 *
 * @see SystemGetAvailableTreeDeviceListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10811","type":"sequence"}]
 */
class SystemGetAvailableTreeDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName treeDeviceInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:10811
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


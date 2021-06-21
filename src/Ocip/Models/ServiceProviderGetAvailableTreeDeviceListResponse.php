<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetAvailableTreeDeviceListResponse
 *
 * Response to ServiceProviderGetAvailableTreeDeviceListRequest.
 *
 * @see ServiceProviderGetAvailableTreeDeviceListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4399","type":"sequence"}]
 */
class ServiceProviderGetAvailableTreeDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treeDeviceInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4399
     * @var \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo[]
     */
    private $treeDeviceInfo = array(
        
    );

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


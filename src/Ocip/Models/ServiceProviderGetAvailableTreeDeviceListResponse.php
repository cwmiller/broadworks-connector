<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetAvailableTreeDeviceListResponse
 *
 * Response to ServiceProviderGetAvailableTreeDeviceListRequest.
 *
 * @see ServiceProviderGetAvailableTreeDeviceListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4484","type":"sequence"}]
 */
class ServiceProviderGetAvailableTreeDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName treeDeviceInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4484
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


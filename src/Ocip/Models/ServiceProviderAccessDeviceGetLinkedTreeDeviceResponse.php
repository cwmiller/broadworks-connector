<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetLinkedTreeDeviceResponse
 *
 * Response to ServiceProviderAccessDeviceGetLinkedTreeDeviceRequest.
 *
 * @see ServiceProviderAccessDeviceGetLinkedTreeDeviceRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:796","type":"sequence"}]
 */
class ServiceProviderAccessDeviceGetLinkedTreeDeviceResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treeDeviceInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:796
     * @var \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo|null
     */
    protected $treeDeviceInfo = null;

    /**
     * Getter for treeDeviceInfo
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo
     */
    public function getTreeDeviceInfo()
    {
        return $this->treeDeviceInfo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treeDeviceInfo;
    }

    /**
     * Setter for treeDeviceInfo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo $treeDeviceInfo
     * @return $this
     */
    public function setTreeDeviceInfo(\CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo $treeDeviceInfo)
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


}


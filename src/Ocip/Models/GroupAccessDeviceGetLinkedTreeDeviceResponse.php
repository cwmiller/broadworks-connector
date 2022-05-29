<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetLinkedTreeDeviceResponse
 *
 * Response to GroupAccessDeviceGetLinkedTreeDeviceRequest.
 *
 * @see GroupAccessDeviceGetLinkedTreeDeviceRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:936","type":"sequence"}]
 */
class GroupAccessDeviceGetLinkedTreeDeviceResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treeDeviceInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:936
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


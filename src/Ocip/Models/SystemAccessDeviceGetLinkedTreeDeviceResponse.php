<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetLinkedTreeDeviceResponse
 *
 * Response to SystemAccessDeviceGetLinkedTreeDeviceRequest.
 *
 * @see SystemAccessDeviceGetLinkedTreeDeviceRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1208","type":"sequence"}]
 */
class SystemAccessDeviceGetLinkedTreeDeviceResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treeDeviceInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1208
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGetAvailableTreeDeviceListResponse
 *
 * Response to SystemGetAvailableTreeDeviceListRequest.
 *
 * @see SystemGetAvailableTreeDeviceListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10690","type":"sequence"}]
 */
class SystemGetAvailableTreeDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treeDeviceInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TreeDeviceInfo
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10690
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


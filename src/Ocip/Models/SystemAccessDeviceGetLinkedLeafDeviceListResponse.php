<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetLinkedLeafDeviceListResponse
 *
 * Response to SystemAccessDeviceGetLinkedLeafDeviceListRequest.
 *
 * @see SystemAccessDeviceGetLinkedLeafDeviceListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1170","type":"sequence"}]
 */
class SystemAccessDeviceGetLinkedLeafDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treeDeviceLinkId
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1170
     * @var string|null
     */
    private $treeDeviceLinkId = null;

    /**
     * @ElementName leafDeviceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1170
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[]
     */
    private $leafDeviceKey = array(
        
    );

    /**
     * Getter for treeDeviceLinkId
     *
     * @return string
     */
    public function getTreeDeviceLinkId()
    {
        return $this->treeDeviceLinkId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treeDeviceLinkId;
    }

    /**
     * Setter for treeDeviceLinkId
     *
     * @param string $treeDeviceLinkId
     * @return $this
     */
    public function setTreeDeviceLinkId($treeDeviceLinkId)
    {
        $this->treeDeviceLinkId = $treeDeviceLinkId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreeDeviceLinkId()
    {
        $this->treeDeviceLinkId = null;
        return $this;
    }

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


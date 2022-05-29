<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetLinkedLeafDeviceListResponse
 *
 * Response to ServiceProviderAccessDeviceGetLinkedLeafDeviceListRequest.
 *
 * @see ServiceProviderAccessDeviceGetLinkedLeafDeviceListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:757","type":"sequence"}]
 */
class ServiceProviderAccessDeviceGetLinkedLeafDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treeDeviceLinkId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:757
     * @var string|null
     */
    protected $treeDeviceLinkId = null;

    /**
     * @ElementName leafDeviceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:757
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[]
     */
    protected $leafDeviceKey = array(
        
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


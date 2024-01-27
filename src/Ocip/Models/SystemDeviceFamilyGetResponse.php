<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyGetResponse
 *
 * Response to SystemDeviceFamilyGetRequest.
 *         The response includes the tag sets and device types associated to a device family defined in the system.
 *         Column headings for deviceTypeTable are : Device Type(s)
 *         Column headings for tagSetTable are :Tag Set(s)
 *
 * @see SystemDeviceFamilyGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7619","type":"sequence"}]
 */
class SystemDeviceFamilyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceTypeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:7619
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceTypeTable = null;

    /**
     * @ElementName tagSetTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:7619
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $tagSetTable = null;

    /**
     * Getter for deviceTypeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceTypeTable()
    {
        return $this->deviceTypeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTypeTable;
    }

    /**
     * Setter for deviceTypeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTypeTable
     * @return $this
     */
    public function setDeviceTypeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTypeTable)
    {
        $this->deviceTypeTable = $deviceTypeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTypeTable()
    {
        $this->deviceTypeTable = null;
        return $this;
    }

    /**
     * Getter for tagSetTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTagSetTable()
    {
        return $this->tagSetTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSetTable;
    }

    /**
     * Setter for tagSetTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $tagSetTable
     * @return $this
     */
    public function setTagSetTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $tagSetTable)
    {
        $this->tagSetTable = $tagSetTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagSetTable()
    {
        $this->tagSetTable = null;
        return $this;
    }
}


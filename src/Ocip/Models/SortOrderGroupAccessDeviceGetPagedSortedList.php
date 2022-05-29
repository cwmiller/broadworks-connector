<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortOrderGroupAccessDeviceGetPagedSortedList
 *
 * Used to sort the GroupAccessDeviceGetPagedSortedListRequest request.
 *
 * @see GroupAccessDeviceGetPagedSortedListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:9086","type":"choice"}]
 */
class SortOrderGroupAccessDeviceGetPagedSortedList
{

    /**
     * @ElementName sortByDeviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceName
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9086
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceName|null
     */
    protected $sortByDeviceName = null;

    /**
     * @ElementName sortByDeviceType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceType
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9086
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceType|null
     */
    protected $sortByDeviceType = null;

    /**
     * @ElementName sortByDeviceNetAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceNetAddress
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9086
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceNetAddress|null
     */
    protected $sortByDeviceNetAddress = null;

    /**
     * @ElementName sortByDeviceMACAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceMACAddress
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9086
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceMACAddress|null
     */
    protected $sortByDeviceMACAddress = null;

    /**
     * Getter for sortByDeviceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceName
     */
    public function getSortByDeviceName()
    {
        return $this->sortByDeviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByDeviceName;
    }

    /**
     * Setter for sortByDeviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceName $sortByDeviceName
     * @return $this
     */
    public function setSortByDeviceName(\CWM\BroadWorksConnector\Ocip\Models\SortByDeviceName $sortByDeviceName)
    {
        $this->sortByDeviceName = $sortByDeviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByDeviceName()
    {
        $this->sortByDeviceName = null;
        return $this;
    }

    /**
     * Getter for sortByDeviceType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceType
     */
    public function getSortByDeviceType()
    {
        return $this->sortByDeviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByDeviceType;
    }

    /**
     * Setter for sortByDeviceType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceType $sortByDeviceType
     * @return $this
     */
    public function setSortByDeviceType(\CWM\BroadWorksConnector\Ocip\Models\SortByDeviceType $sortByDeviceType)
    {
        $this->sortByDeviceType = $sortByDeviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByDeviceType()
    {
        $this->sortByDeviceType = null;
        return $this;
    }

    /**
     * Getter for sortByDeviceNetAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceNetAddress
     */
    public function getSortByDeviceNetAddress()
    {
        return $this->sortByDeviceNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByDeviceNetAddress;
    }

    /**
     * Setter for sortByDeviceNetAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceNetAddress $sortByDeviceNetAddress
     * @return $this
     */
    public function setSortByDeviceNetAddress(\CWM\BroadWorksConnector\Ocip\Models\SortByDeviceNetAddress $sortByDeviceNetAddress)
    {
        $this->sortByDeviceNetAddress = $sortByDeviceNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByDeviceNetAddress()
    {
        $this->sortByDeviceNetAddress = null;
        return $this;
    }

    /**
     * Getter for sortByDeviceMACAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceMACAddress
     */
    public function getSortByDeviceMACAddress()
    {
        return $this->sortByDeviceMACAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByDeviceMACAddress;
    }

    /**
     * Setter for sortByDeviceMACAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceMACAddress $sortByDeviceMACAddress
     * @return $this
     */
    public function setSortByDeviceMACAddress(\CWM\BroadWorksConnector\Ocip\Models\SortByDeviceMACAddress $sortByDeviceMACAddress)
    {
        $this->sortByDeviceMACAddress = $sortByDeviceMACAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByDeviceMACAddress()
    {
        $this->sortByDeviceMACAddress = null;
        return $this;
    }


}


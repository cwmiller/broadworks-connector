<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetPagedSortedListRequest22
 *
 * Requests the list of access devices in a group.
 *         The response is either GroupAccessDeviceGetPagedSortedListResponse22 or ErrorResponse.
 *         If no sortOrder is included, the response is sorted by Device Name ascending
 *         by default.  If the responsePagingControl element is not provided, the paging startIndex 
 *         will be set to 1 by default, and the responsePageSize will be set to the maximum 
 *         responsePageSize by default.
 *         Multiple search criteria are logically ANDed together unless the 
 *         searchCriteriaModeOr option is included. Then the search criteria are logically 
 *         ORed together.
 *         The getVisualDeviceManagementAPIDevicesOnly element can only be set when CloudPBX is licenced.
 *         If the getVisualDeviceManagementAPIDevicesOnly element is not set, all devices are returned with Visual Device Management API flag set to empty.
 *         If the getVisualDeviceManagementAPIDevicesOnly element is set to true, only SIP devices supporting Visual Device Management API are returned.
 *         If the getVisualDeviceManagementAPIDevicesOnly element is set to false, all SIP devices are returned with their current Visual Device Management API flag value.
 *
 * @see GroupAccessDeviceGetPagedSortedListResponse22
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1051","type":"sequence"}]
 */
class GroupAccessDeviceGetPagedSortedListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1051
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1051
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName includeTotalNumberOfRows
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1051
     * @var bool|null
     */
    protected $includeTotalNumberOfRows = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1051
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    protected $responsePagingControl = null;

    /**
     * @ElementName sortOrder
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupAccessDeviceGetPagedSortedList
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1051
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupAccessDeviceGetPagedSortedList[]
     */
    protected $sortOrder = [
        
    ];

    /**
     * @ElementName searchCriteriaDeviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1051
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[]
     */
    protected $searchCriteriaDeviceName = [
        
    ];

    /**
     * @ElementName searchCriteriaDeviceMACAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1051
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[]
     */
    protected $searchCriteriaDeviceMACAddress = [
        
    ];

    /**
     * @ElementName searchCriteriaDeviceNetAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1051
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[]
     */
    protected $searchCriteriaDeviceNetAddress = [
        
    ];

    /**
     * @ElementName searchCriteriaExactDeviceType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1051
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType[]
     */
    protected $searchCriteriaExactDeviceType = [
        
    ];

    /**
     * @ElementName searchCriteriaAccessDeviceVersion
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1051
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion[]
     */
    protected $searchCriteriaAccessDeviceVersion = [
        
    ];

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1051
     * @var bool|null
     */
    protected $searchCriteriaModeOr = null;

    /**
     * @ElementName getVisualDeviceManagementAPIDevicesOnly
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1051
     * @var bool|null
     */
    protected $getVisualDeviceManagementAPIDevicesOnly = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for includeTotalNumberOfRows
     *
     * @return bool
     */
    public function getIncludeTotalNumberOfRows()
    {
        return $this->includeTotalNumberOfRows instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeTotalNumberOfRows;
    }

    /**
     * Setter for includeTotalNumberOfRows
     *
     * @param bool $includeTotalNumberOfRows
     * @return $this
     */
    public function setIncludeTotalNumberOfRows($includeTotalNumberOfRows)
    {
        $this->includeTotalNumberOfRows = $includeTotalNumberOfRows;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeTotalNumberOfRows()
    {
        $this->includeTotalNumberOfRows = null;
        return $this;
    }

    /**
     * Getter for responsePagingControl
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responsePagingControl;
    }

    /**
     * Setter for responsePagingControl
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl
     * @return $this
     */
    public function setResponsePagingControl(\CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl)
    {
        $this->responsePagingControl = $responsePagingControl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponsePagingControl()
    {
        $this->responsePagingControl = null;
        return $this;
    }

    /**
     * Getter for sortOrder
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupAccessDeviceGetPagedSortedList[]
     */
    public function getSortOrder()
    {
        return $this->sortOrder instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortOrder;
    }

    /**
     * Setter for sortOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupAccessDeviceGetPagedSortedList[] $sortOrder
     * @return $this
     */
    public function setSortOrder(array $sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortOrder()
    {
        $this->sortOrder = null;
        return $this;
    }

    /**
     * Adder for sortOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupAccessDeviceGetPagedSortedList $sortOrder
     * @return $this
     */
    public function addSortOrder($sortOrder)
    {
        $this->sortOrder[] = $sortOrder;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[]
     */
    public function getSearchCriteriaDeviceName()
    {
        return $this->searchCriteriaDeviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDeviceName;
    }

    /**
     * Setter for searchCriteriaDeviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[] $searchCriteriaDeviceName
     * @return $this
     */
    public function setSearchCriteriaDeviceName(array $searchCriteriaDeviceName)
    {
        $this->searchCriteriaDeviceName = $searchCriteriaDeviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDeviceName()
    {
        $this->searchCriteriaDeviceName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName $searchCriteriaDeviceName
     * @return $this
     */
    public function addSearchCriteriaDeviceName($searchCriteriaDeviceName)
    {
        $this->searchCriteriaDeviceName[] = $searchCriteriaDeviceName;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceMACAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[]
     */
    public function getSearchCriteriaDeviceMACAddress()
    {
        return $this->searchCriteriaDeviceMACAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDeviceMACAddress;
    }

    /**
     * Setter for searchCriteriaDeviceMACAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[] $searchCriteriaDeviceMACAddress
     * @return $this
     */
    public function setSearchCriteriaDeviceMACAddress(array $searchCriteriaDeviceMACAddress)
    {
        $this->searchCriteriaDeviceMACAddress = $searchCriteriaDeviceMACAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDeviceMACAddress()
    {
        $this->searchCriteriaDeviceMACAddress = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceMACAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress
     * @return $this
     */
    public function addSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress)
    {
        $this->searchCriteriaDeviceMACAddress[] = $searchCriteriaDeviceMACAddress;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceNetAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[]
     */
    public function getSearchCriteriaDeviceNetAddress()
    {
        return $this->searchCriteriaDeviceNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDeviceNetAddress;
    }

    /**
     * Setter for searchCriteriaDeviceNetAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[] $searchCriteriaDeviceNetAddress
     * @return $this
     */
    public function setSearchCriteriaDeviceNetAddress(array $searchCriteriaDeviceNetAddress)
    {
        $this->searchCriteriaDeviceNetAddress = $searchCriteriaDeviceNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDeviceNetAddress()
    {
        $this->searchCriteriaDeviceNetAddress = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceNetAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress
     * @return $this
     */
    public function addSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress)
    {
        $this->searchCriteriaDeviceNetAddress[] = $searchCriteriaDeviceNetAddress;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType[]
     */
    public function getSearchCriteriaExactDeviceType()
    {
        return $this->searchCriteriaExactDeviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactDeviceType;
    }

    /**
     * Setter for searchCriteriaExactDeviceType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType[] $searchCriteriaExactDeviceType
     * @return $this
     */
    public function setSearchCriteriaExactDeviceType(array $searchCriteriaExactDeviceType)
    {
        $this->searchCriteriaExactDeviceType = $searchCriteriaExactDeviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactDeviceType()
    {
        $this->searchCriteriaExactDeviceType = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactDeviceType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType
     * @return $this
     */
    public function addSearchCriteriaExactDeviceType($searchCriteriaExactDeviceType)
    {
        $this->searchCriteriaExactDeviceType[] = $searchCriteriaExactDeviceType;
        return $this;
    }

    /**
     * Getter for searchCriteriaAccessDeviceVersion
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion[]
     */
    public function getSearchCriteriaAccessDeviceVersion()
    {
        return $this->searchCriteriaAccessDeviceVersion instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAccessDeviceVersion;
    }

    /**
     * Setter for searchCriteriaAccessDeviceVersion
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion[] $searchCriteriaAccessDeviceVersion
     * @return $this
     */
    public function setSearchCriteriaAccessDeviceVersion(array $searchCriteriaAccessDeviceVersion)
    {
        $this->searchCriteriaAccessDeviceVersion = $searchCriteriaAccessDeviceVersion;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAccessDeviceVersion()
    {
        $this->searchCriteriaAccessDeviceVersion = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAccessDeviceVersion
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion $searchCriteriaAccessDeviceVersion
     * @return $this
     */
    public function addSearchCriteriaAccessDeviceVersion($searchCriteriaAccessDeviceVersion)
    {
        $this->searchCriteriaAccessDeviceVersion[] = $searchCriteriaAccessDeviceVersion;
        return $this;
    }

    /**
     * Getter for searchCriteriaModeOr
     *
     * @return bool
     */
    public function getSearchCriteriaModeOr()
    {
        return $this->searchCriteriaModeOr instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaModeOr;
    }

    /**
     * Setter for searchCriteriaModeOr
     *
     * @param bool $searchCriteriaModeOr
     * @return $this
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr)
    {
        $this->searchCriteriaModeOr = $searchCriteriaModeOr;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaModeOr()
    {
        $this->searchCriteriaModeOr = null;
        return $this;
    }

    /**
     * Getter for getVisualDeviceManagementAPIDevicesOnly
     *
     * @return bool
     */
    public function getGetVisualDeviceManagementAPIDevicesOnly()
    {
        return $this->getVisualDeviceManagementAPIDevicesOnly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->getVisualDeviceManagementAPIDevicesOnly;
    }

    /**
     * Setter for getVisualDeviceManagementAPIDevicesOnly
     *
     * @param bool $getVisualDeviceManagementAPIDevicesOnly
     * @return $this
     */
    public function setGetVisualDeviceManagementAPIDevicesOnly($getVisualDeviceManagementAPIDevicesOnly)
    {
        $this->getVisualDeviceManagementAPIDevicesOnly = $getVisualDeviceManagementAPIDevicesOnly;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGetVisualDeviceManagementAPIDevicesOnly()
    {
        $this->getVisualDeviceManagementAPIDevicesOnly = null;
        return $this;
    }
}


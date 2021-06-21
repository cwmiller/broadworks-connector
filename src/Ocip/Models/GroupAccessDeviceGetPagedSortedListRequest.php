<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetPagedSortedListRequest
 *
 * Requests the list of access devices in a group.
 *         The response is either GroupAccessDeviceGetPagedSortedListResponse or ErrorResponse.
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
 *         Replaced by GroupAccessDeviceGetPagedSortedListRequest22.
 *
 * @see GroupAccessDeviceGetPagedSortedListResponse
 * @see ErrorResponse
 * @see GroupAccessDeviceGetPagedSortedListRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:3055","type":"sequence","children":[{"id":"ab0042aa512abc10edb3c55e4b416b0b:3059","type":"choice","optional":true}]}]
 */
class GroupAccessDeviceGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3055
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3055
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3055
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortByDeviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceName
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3059
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceName|null
     */
    private $sortByDeviceName = null;

    /**
     * @ElementName sortByDeviceType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceType
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3059
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceType|null
     */
    private $sortByDeviceType = null;

    /**
     * @ElementName sortByDeviceNetAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceNetAddress
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3059
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceNetAddress|null
     */
    private $sortByDeviceNetAddress = null;

    /**
     * @ElementName sortByDeviceMACAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceMACAddress
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3059
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDeviceMACAddress|null
     */
    private $sortByDeviceMACAddress = null;

    /**
     * @ElementName searchCriteriaDeviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3055
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[]
     */
    private $searchCriteriaDeviceName = array(
        
    );

    /**
     * @ElementName searchCriteriaDeviceMACAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3055
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[]
     */
    private $searchCriteriaDeviceMACAddress = array(
        
    );

    /**
     * @ElementName searchCriteriaDeviceNetAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3055
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[]
     */
    private $searchCriteriaDeviceNetAddress = array(
        
    );

    /**
     * @ElementName searchCriteriaExactDeviceType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3055
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType[]
     */
    private $searchCriteriaExactDeviceType = array(
        
    );

    /**
     * @ElementName searchCriteriaAccessDeviceVersion
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3055
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion[]
     */
    private $searchCriteriaAccessDeviceVersion = array(
        
    );

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3055
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

    /**
     * @ElementName getVisualDeviceManagementAPIDevicesOnly
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3055
     * @var bool|null
     */
    private $getVisualDeviceManagementAPIDevicesOnly = null;

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


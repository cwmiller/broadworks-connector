<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListRequest22
 *
 * Request a list of available Mobile Subscriber Directory Numbers not yet assigned to any user.
 *         If the responsePagingControl element is not provided, the paging startIndex will be set to 1 
 *         by default, and the responsePageSize will be set to the maximum ResponsePageSize by default.
 *         If no sortOrder is included the response is sorted by Mobile Number ascending by default.
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option is included.
 *         Then the search criteria are logically ORed together.
 *         The response is either EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListResponse22 or ErrorResponse.
 *
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListResponse22
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:259","type":"sequence"}]
 */
class EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:259
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName includeTotalNumberOfRows
     * @Type bool
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:259
     * @var bool|null
     */
    protected $includeTotalNumberOfRows = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:259
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    protected $responsePagingControl = null;

    /**
     * @ElementName sortByMobileDirectoryNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByMobileDirectoryNumber
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:259
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByMobileDirectoryNumber|null
     */
    protected $sortByMobileDirectoryNumber = null;

    /**
     * @ElementName searchCriteriaMobileSubscriberDirectoryNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobileSubscriberDirectoryNumber
     * @Array
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:259
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobileSubscriberDirectoryNumber[]
     */
    protected $searchCriteriaMobileSubscriberDirectoryNumber = [
        
    ];

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:259
     * @var bool|null
     */
    protected $searchCriteriaModeOr = null;

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
     * Getter for sortByMobileDirectoryNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByMobileDirectoryNumber
     */
    public function getSortByMobileDirectoryNumber()
    {
        return $this->sortByMobileDirectoryNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByMobileDirectoryNumber;
    }

    /**
     * Setter for sortByMobileDirectoryNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByMobileDirectoryNumber $sortByMobileDirectoryNumber
     * @return $this
     */
    public function setSortByMobileDirectoryNumber(\CWM\BroadWorksConnector\Ocip\Models\SortByMobileDirectoryNumber $sortByMobileDirectoryNumber)
    {
        $this->sortByMobileDirectoryNumber = $sortByMobileDirectoryNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByMobileDirectoryNumber()
    {
        $this->sortByMobileDirectoryNumber = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaMobileSubscriberDirectoryNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobileSubscriberDirectoryNumber[]
     */
    public function getSearchCriteriaMobileSubscriberDirectoryNumber()
    {
        return $this->searchCriteriaMobileSubscriberDirectoryNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaMobileSubscriberDirectoryNumber;
    }

    /**
     * Setter for searchCriteriaMobileSubscriberDirectoryNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobileSubscriberDirectoryNumber[] $searchCriteriaMobileSubscriberDirectoryNumber
     * @return $this
     */
    public function setSearchCriteriaMobileSubscriberDirectoryNumber(array $searchCriteriaMobileSubscriberDirectoryNumber)
    {
        $this->searchCriteriaMobileSubscriberDirectoryNumber = $searchCriteriaMobileSubscriberDirectoryNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaMobileSubscriberDirectoryNumber()
    {
        $this->searchCriteriaMobileSubscriberDirectoryNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaMobileSubscriberDirectoryNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobileSubscriberDirectoryNumber $searchCriteriaMobileSubscriberDirectoryNumber
     * @return $this
     */
    public function addSearchCriteriaMobileSubscriberDirectoryNumber($searchCriteriaMobileSubscriberDirectoryNumber)
    {
        $this->searchCriteriaMobileSubscriberDirectoryNumber[] = $searchCriteriaMobileSubscriberDirectoryNumber;
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
}


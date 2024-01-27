<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetPagedSortedListRequest
 *
 * Get a list of service provider administrators.
 *         The response is either a ServiceProviderAdminGetPagedSortedListResponse or an ErrorResponse.
 *         If no sortOrder is included, the response is sorted by Administrator ID ascending by default.
 *         If the responsePagingControl element is not provided, the paging startIndex will be 
 *         set to 1 by default, and the responsePageSize will be set to the maximum 
 *         responsePageSize by default.
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option is 
 *         included. Then the search criteria are logically ORed together.
 *
 * @see ServiceProviderAdminGetPagedSortedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:1445","type":"sequence"}]
 */
class ServiceProviderAdminGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:1445
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1445
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    protected $responsePagingControl = null;

    /**
     * @ElementName sortOrder
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortOrderServiceProviderAdminGetPagedSortedList
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1445
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortOrderServiceProviderAdminGetPagedSortedList[]
     */
    protected $sortOrder = [
        
    ];

    /**
     * @ElementName searchCriteriaAdminId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminId
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1445
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminId[]
     */
    protected $searchCriteriaAdminId = [
        
    ];

    /**
     * @ElementName searchCriteriaAdminLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminLastName
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1445
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminLastName[]
     */
    protected $searchCriteriaAdminLastName = [
        
    ];

    /**
     * @ElementName searchCriteriaAdminFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminFirstName
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1445
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminFirstName[]
     */
    protected $searchCriteriaAdminFirstName = [
        
    ];

    /**
     * @ElementName searchCriteriaExactServiceProviderAdminType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProviderAdminType
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1445
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProviderAdminType[]
     */
    protected $searchCriteriaExactServiceProviderAdminType = [
        
    ];

    /**
     * @ElementName searchCriteriaLanguage
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLanguage
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1445
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLanguage[]
     */
    protected $searchCriteriaLanguage = [
        
    ];

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1445
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortOrderServiceProviderAdminGetPagedSortedList[]
     */
    public function getSortOrder()
    {
        return $this->sortOrder instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortOrder;
    }

    /**
     * Setter for sortOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderServiceProviderAdminGetPagedSortedList[] $sortOrder
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderServiceProviderAdminGetPagedSortedList $sortOrder
     * @return $this
     */
    public function addSortOrder($sortOrder)
    {
        $this->sortOrder[] = $sortOrder;
        return $this;
    }

    /**
     * Getter for searchCriteriaAdminId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminId[]
     */
    public function getSearchCriteriaAdminId()
    {
        return $this->searchCriteriaAdminId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAdminId;
    }

    /**
     * Setter for searchCriteriaAdminId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminId[] $searchCriteriaAdminId
     * @return $this
     */
    public function setSearchCriteriaAdminId(array $searchCriteriaAdminId)
    {
        $this->searchCriteriaAdminId = $searchCriteriaAdminId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAdminId()
    {
        $this->searchCriteriaAdminId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAdminId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminId $searchCriteriaAdminId
     * @return $this
     */
    public function addSearchCriteriaAdminId($searchCriteriaAdminId)
    {
        $this->searchCriteriaAdminId[] = $searchCriteriaAdminId;
        return $this;
    }

    /**
     * Getter for searchCriteriaAdminLastName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminLastName[]
     */
    public function getSearchCriteriaAdminLastName()
    {
        return $this->searchCriteriaAdminLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAdminLastName;
    }

    /**
     * Setter for searchCriteriaAdminLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminLastName[] $searchCriteriaAdminLastName
     * @return $this
     */
    public function setSearchCriteriaAdminLastName(array $searchCriteriaAdminLastName)
    {
        $this->searchCriteriaAdminLastName = $searchCriteriaAdminLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAdminLastName()
    {
        $this->searchCriteriaAdminLastName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAdminLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminLastName $searchCriteriaAdminLastName
     * @return $this
     */
    public function addSearchCriteriaAdminLastName($searchCriteriaAdminLastName)
    {
        $this->searchCriteriaAdminLastName[] = $searchCriteriaAdminLastName;
        return $this;
    }

    /**
     * Getter for searchCriteriaAdminFirstName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminFirstName[]
     */
    public function getSearchCriteriaAdminFirstName()
    {
        return $this->searchCriteriaAdminFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAdminFirstName;
    }

    /**
     * Setter for searchCriteriaAdminFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminFirstName[] $searchCriteriaAdminFirstName
     * @return $this
     */
    public function setSearchCriteriaAdminFirstName(array $searchCriteriaAdminFirstName)
    {
        $this->searchCriteriaAdminFirstName = $searchCriteriaAdminFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAdminFirstName()
    {
        $this->searchCriteriaAdminFirstName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAdminFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminFirstName $searchCriteriaAdminFirstName
     * @return $this
     */
    public function addSearchCriteriaAdminFirstName($searchCriteriaAdminFirstName)
    {
        $this->searchCriteriaAdminFirstName[] = $searchCriteriaAdminFirstName;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactServiceProviderAdminType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProviderAdminType[]
     */
    public function getSearchCriteriaExactServiceProviderAdminType()
    {
        return $this->searchCriteriaExactServiceProviderAdminType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactServiceProviderAdminType;
    }

    /**
     * Setter for searchCriteriaExactServiceProviderAdminType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProviderAdminType[] $searchCriteriaExactServiceProviderAdminType
     * @return $this
     */
    public function setSearchCriteriaExactServiceProviderAdminType(array $searchCriteriaExactServiceProviderAdminType)
    {
        $this->searchCriteriaExactServiceProviderAdminType = $searchCriteriaExactServiceProviderAdminType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactServiceProviderAdminType()
    {
        $this->searchCriteriaExactServiceProviderAdminType = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactServiceProviderAdminType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProviderAdminType $searchCriteriaExactServiceProviderAdminType
     * @return $this
     */
    public function addSearchCriteriaExactServiceProviderAdminType($searchCriteriaExactServiceProviderAdminType)
    {
        $this->searchCriteriaExactServiceProviderAdminType[] = $searchCriteriaExactServiceProviderAdminType;
        return $this;
    }

    /**
     * Getter for searchCriteriaLanguage
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLanguage[]
     */
    public function getSearchCriteriaLanguage()
    {
        return $this->searchCriteriaLanguage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaLanguage;
    }

    /**
     * Setter for searchCriteriaLanguage
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLanguage[] $searchCriteriaLanguage
     * @return $this
     */
    public function setSearchCriteriaLanguage(array $searchCriteriaLanguage)
    {
        $this->searchCriteriaLanguage = $searchCriteriaLanguage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaLanguage()
    {
        $this->searchCriteriaLanguage = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaLanguage
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLanguage $searchCriteriaLanguage
     * @return $this
     */
    public function addSearchCriteriaLanguage($searchCriteriaLanguage)
    {
        $this->searchCriteriaLanguage[] = $searchCriteriaLanguage;
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


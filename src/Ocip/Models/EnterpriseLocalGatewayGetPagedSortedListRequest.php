<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseLocalGatewayGetPagedSortedListRequest
 *
 * Get a list of local gateways defined within an enterprise. Only the local gateways having device associated are returned.
 *
 *         If the responsePagingControl element is not provided, the paging startIndex will be set to 1 
 *         by default, and the responsePageSize will be set to the maximum ResponsePageSize by default.
 *         If no sortOrder is included the response is sorted by Trunk group name  ascending by default.
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option is included.
 *         Then the search criteria are logically ORed together.
 *  
 *         The response is either a EnterpriseLocalGatewayGetPagedSortedListResponse or an ErrorResponse.
 *
 * @see EnterpriseLocalGatewayGetPagedSortedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:484","type":"sequence"}]
 */
class EnterpriseLocalGatewayGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b9c14e2d80e4e7749688ca13ba233b44:484
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:484
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortByTrunkGroupName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByTrunkGroupName
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:484
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByTrunkGroupName|null
     */
    private $sortByTrunkGroupName = null;

    /**
     * @ElementName searchCriteriaTrunkGroupName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:484
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName[]
     */
    private $searchCriteriaTrunkGroupName = array(
        
    );

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:484
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

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
     * Getter for sortByTrunkGroupName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByTrunkGroupName
     */
    public function getSortByTrunkGroupName()
    {
        return $this->sortByTrunkGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByTrunkGroupName;
    }

    /**
     * Setter for sortByTrunkGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByTrunkGroupName $sortByTrunkGroupName
     * @return $this
     */
    public function setSortByTrunkGroupName(\CWM\BroadWorksConnector\Ocip\Models\SortByTrunkGroupName $sortByTrunkGroupName)
    {
        $this->sortByTrunkGroupName = $sortByTrunkGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByTrunkGroupName()
    {
        $this->sortByTrunkGroupName = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaTrunkGroupName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName[]
     */
    public function getSearchCriteriaTrunkGroupName()
    {
        return $this->searchCriteriaTrunkGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaTrunkGroupName;
    }

    /**
     * Setter for searchCriteriaTrunkGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName[] $searchCriteriaTrunkGroupName
     * @return $this
     */
    public function setSearchCriteriaTrunkGroupName(array $searchCriteriaTrunkGroupName)
    {
        $this->searchCriteriaTrunkGroupName = $searchCriteriaTrunkGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaTrunkGroupName()
    {
        $this->searchCriteriaTrunkGroupName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaTrunkGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName $searchCriteriaTrunkGroupName
     * @return $this
     */
    public function addSearchCriteriaTrunkGroupName($searchCriteriaTrunkGroupName)
    {
        $this->searchCriteriaTrunkGroupName[] = $searchCriteriaTrunkGroupName;
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetListRequest
 *
 * Request a list of resellers in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a ResellerGetListResponse or an ErrorResponse.
 *
 * @see ResellerGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:550","type":"sequence"}]
 */
class ResellerGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:550
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaResellerId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId
     * @Array
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:550
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    protected $searchCriteriaResellerId = array(
        
    );

    /**
     * @ElementName searchCriteriaResellerName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerName
     * @Array
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:550
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerName[]
     */
    protected $searchCriteriaResellerName = array(
        
    );

    /**
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaResellerId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    public function getSearchCriteriaResellerId()
    {
        return $this->searchCriteriaResellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaResellerId;
    }

    /**
     * Setter for searchCriteriaResellerId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[] $searchCriteriaResellerId
     * @return $this
     */
    public function setSearchCriteriaResellerId(array $searchCriteriaResellerId)
    {
        $this->searchCriteriaResellerId = $searchCriteriaResellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaResellerId()
    {
        $this->searchCriteriaResellerId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaResellerId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId $searchCriteriaResellerId
     * @return $this
     */
    public function addSearchCriteriaResellerId($searchCriteriaResellerId)
    {
        $this->searchCriteriaResellerId[] = $searchCriteriaResellerId;
        return $this;
    }

    /**
     * Getter for searchCriteriaResellerName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerName[]
     */
    public function getSearchCriteriaResellerName()
    {
        return $this->searchCriteriaResellerName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaResellerName;
    }

    /**
     * Setter for searchCriteriaResellerName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerName[] $searchCriteriaResellerName
     * @return $this
     */
    public function setSearchCriteriaResellerName(array $searchCriteriaResellerName)
    {
        $this->searchCriteriaResellerName = $searchCriteriaResellerName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaResellerName()
    {
        $this->searchCriteriaResellerName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaResellerName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerName $searchCriteriaResellerName
     * @return $this
     */
    public function addSearchCriteriaResellerName($searchCriteriaResellerName)
    {
        $this->searchCriteriaResellerName[] = $searchCriteriaResellerName;
        return $this;
    }


}


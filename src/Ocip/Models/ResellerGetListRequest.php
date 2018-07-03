<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetListRequest
 *
 * Request a list of resellers in the system.
 *         It is possible to search by various criteria to restrict the number of
 * rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a ResellerGetListResponse or an ErrorResponse.
 *
 * @see ResellerGetListResponse
 * @see ErrorResponse
 */
class ResellerGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaResellerId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    private $searchCriteriaResellerId = array(
        
    );

    /**
     * @ElementName searchCriteriaResellerName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerName[]
     */
    private $searchCriteriaResellerName = array(
        
    );

    /**
     * Getter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @return int|null
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @param int|null $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * Getter for searchCriteriaResellerId
     *
     * @ElementName searchCriteriaResellerId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    public function getSearchCriteriaResellerId()
    {
        return $this->searchCriteriaResellerId;
    }

    /**
     * Setter for searchCriteriaResellerId
     *
     * @ElementName searchCriteriaResellerId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[] $searchCriteriaResellerId
     * @return $this
     */
    public function setSearchCriteriaResellerId($searchCriteriaResellerId)
    {
        $this->searchCriteriaResellerId = $searchCriteriaResellerId;
        return $this;
    }

    /**
     * Adder for searchCriteriaResellerId
     *
     * @ElementName searchCriteriaResellerId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId $searchCriteriaResellerId
     * @return $this
     */
    public function addSearchCriteriaResellerId($searchCriteriaResellerId)
    {
        $this->searchCriteriaResellerId []= $searchCriteriaResellerId;
        return $this;
    }

    /**
     * Getter for searchCriteriaResellerName
     *
     * @ElementName searchCriteriaResellerName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerName[]
     */
    public function getSearchCriteriaResellerName()
    {
        return $this->searchCriteriaResellerName;
    }

    /**
     * Setter for searchCriteriaResellerName
     *
     * @ElementName searchCriteriaResellerName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerName[] $searchCriteriaResellerName
     * @return $this
     */
    public function setSearchCriteriaResellerName($searchCriteriaResellerName)
    {
        $this->searchCriteriaResellerName = $searchCriteriaResellerName;
        return $this;
    }

    /**
     * Adder for searchCriteriaResellerName
     *
     * @ElementName searchCriteriaResellerName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerName $searchCriteriaResellerName
     * @return $this
     */
    public function addSearchCriteriaResellerName($searchCriteriaResellerName)
    {
        $this->searchCriteriaResellerName []= $searchCriteriaResellerName;
        return $this;
    }


}


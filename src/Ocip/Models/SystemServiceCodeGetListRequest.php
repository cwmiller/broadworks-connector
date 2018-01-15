<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceCodeGetListRequest
 *
 * Request to get all service codes that have been defined in the system.
 *         It is possible to search by various criteria to restrict the number of
 * rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either SystemServiceCodeGetListResponse or
 * ErrorResponse.
 */
class SystemServiceCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaServiceCode
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCode[]
     */
    private $searchCriteriaServiceCode = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceCodeDescription
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCodeDescription[]
     */
    private $searchCriteriaServiceCodeDescription = array(
        
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
     * Getter for searchCriteriaServiceCode
     *
     * @ElementName searchCriteriaServiceCode
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCode[]
     */
    public function getSearchCriteriaServiceCode()
    {
        return $this->searchCriteriaServiceCode;
    }

    /**
     * Setter for searchCriteriaServiceCode
     *
     * @ElementName searchCriteriaServiceCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCode[] $searchCriteriaServiceCode
     * @return $this
     */
    public function setSearchCriteriaServiceCode($searchCriteriaServiceCode)
    {
        $this->searchCriteriaServiceCode = $searchCriteriaServiceCode;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceCode
     *
     * @ElementName searchCriteriaServiceCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCode $searchCriteriaServiceCode
     * @return $this
     */
    public function addSearchCriteriaServiceCode($searchCriteriaServiceCode)
    {
        $this->searchCriteriaServiceCode []= $searchCriteriaServiceCode;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceCodeDescription
     *
     * @ElementName searchCriteriaServiceCodeDescription
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCodeDescription[]
     */
    public function getSearchCriteriaServiceCodeDescription()
    {
        return $this->searchCriteriaServiceCodeDescription;
    }

    /**
     * Setter for searchCriteriaServiceCodeDescription
     *
     * @ElementName searchCriteriaServiceCodeDescription
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCodeDescription[] $searchCriteriaServiceCodeDescription
     * @return $this
     */
    public function setSearchCriteriaServiceCodeDescription($searchCriteriaServiceCodeDescription)
    {
        $this->searchCriteriaServiceCodeDescription = $searchCriteriaServiceCodeDescription;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceCodeDescription
     *
     * @ElementName searchCriteriaServiceCodeDescription
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCodeDescription $searchCriteriaServiceCodeDescription
     * @return $this
     */
    public function addSearchCriteriaServiceCodeDescription($searchCriteriaServiceCodeDescription)
    {
        $this->searchCriteriaServiceCodeDescription []= $searchCriteriaServiceCodeDescription;
        return $this;
    }


}


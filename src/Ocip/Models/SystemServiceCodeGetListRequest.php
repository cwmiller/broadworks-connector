<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceCodeGetListRequest
 *
 * Request to get all service codes that have been defined in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either SystemServiceCodeGetListResponse or ErrorResponse.
 *
 * @see SystemServiceCodeGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:14116","type":"sequence"}]
 */
class SystemServiceCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:14116
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaServiceCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCode
     * @Array
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:14116
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCode[]
     */
    private $searchCriteriaServiceCode = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceCodeDescription
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCodeDescription
     * @Array
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:14116
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCodeDescription[]
     */
    private $searchCriteriaServiceCodeDescription = array(
        
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
     * Getter for searchCriteriaServiceCode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCode[]
     */
    public function getSearchCriteriaServiceCode()
    {
        return $this->searchCriteriaServiceCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceCode;
    }

    /**
     * Setter for searchCriteriaServiceCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCode[] $searchCriteriaServiceCode
     * @return $this
     */
    public function setSearchCriteriaServiceCode(array $searchCriteriaServiceCode)
    {
        $this->searchCriteriaServiceCode = $searchCriteriaServiceCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceCode()
    {
        $this->searchCriteriaServiceCode = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCode $searchCriteriaServiceCode
     * @return $this
     */
    public function addSearchCriteriaServiceCode($searchCriteriaServiceCode)
    {
        $this->searchCriteriaServiceCode[] = $searchCriteriaServiceCode;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceCodeDescription
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCodeDescription[]
     */
    public function getSearchCriteriaServiceCodeDescription()
    {
        return $this->searchCriteriaServiceCodeDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceCodeDescription;
    }

    /**
     * Setter for searchCriteriaServiceCodeDescription
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCodeDescription[] $searchCriteriaServiceCodeDescription
     * @return $this
     */
    public function setSearchCriteriaServiceCodeDescription(array $searchCriteriaServiceCodeDescription)
    {
        $this->searchCriteriaServiceCodeDescription = $searchCriteriaServiceCodeDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceCodeDescription()
    {
        $this->searchCriteriaServiceCodeDescription = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceCodeDescription
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceCodeDescription $searchCriteriaServiceCodeDescription
     * @return $this
     */
    public function addSearchCriteriaServiceCodeDescription($searchCriteriaServiceCodeDescription)
    {
        $this->searchCriteriaServiceCodeDescription[] = $searchCriteriaServiceCodeDescription;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGetIMRNListRequest
 *
 * Request to get the list of BroadWorks Mobility IMRN numbers defined in the system.
 *         The response is either a SystemBroadWorksMobilityGetIMRNListResponse
 *         or an ErrorResponse.
 *
 * @see SystemBroadWorksMobilityGetIMRNListResponse
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:966","type":"sequence"}]
 */
class SystemBroadWorksMobilityGetIMRNListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName searchCriteriaIMRN
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN
     * @Array
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:966
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN[]
     */
    protected $searchCriteriaIMRN = [
        
    ];

    /**
     * Getter for searchCriteriaIMRN
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN[]
     */
    public function getSearchCriteriaIMRN()
    {
        return $this->searchCriteriaIMRN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaIMRN;
    }

    /**
     * Setter for searchCriteriaIMRN
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN[] $searchCriteriaIMRN
     * @return $this
     */
    public function setSearchCriteriaIMRN(array $searchCriteriaIMRN)
    {
        $this->searchCriteriaIMRN = $searchCriteriaIMRN;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaIMRN()
    {
        $this->searchCriteriaIMRN = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaIMRN
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN $searchCriteriaIMRN
     * @return $this
     */
    public function addSearchCriteriaIMRN($searchCriteriaIMRN)
    {
        $this->searchCriteriaIMRN[] = $searchCriteriaIMRN;
        return $this;
    }
}


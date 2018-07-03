<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGetIMRNListRequest
 *
 * Request to get the list of BroadWorks Mobility IMRN numbers defined in the
 * system.
 *         The response is either a SystemBroadWorksMobilityGetIMRNListResponse
 *         or an ErrorResponse.
 *
 * @see SystemBroadWorksMobilityGetIMRNListResponse
 * @see ErrorResponse
 */
class SystemBroadWorksMobilityGetIMRNListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName searchCriteriaIMRN
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN[]
     */
    private $searchCriteriaIMRN = array(
        
    );

    /**
     * Getter for searchCriteriaIMRN
     *
     * @ElementName searchCriteriaIMRN
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN[]
     */
    public function getSearchCriteriaIMRN()
    {
        return $this->searchCriteriaIMRN;
    }

    /**
     * Setter for searchCriteriaIMRN
     *
     * @ElementName searchCriteriaIMRN
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN[] $searchCriteriaIMRN
     * @return $this
     */
    public function setSearchCriteriaIMRN($searchCriteriaIMRN)
    {
        $this->searchCriteriaIMRN = $searchCriteriaIMRN;
        return $this;
    }

    /**
     * Adder for searchCriteriaIMRN
     *
     * @ElementName searchCriteriaIMRN
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN $searchCriteriaIMRN
     * @return $this
     */
    public function addSearchCriteriaIMRN($searchCriteriaIMRN)
    {
        $this->searchCriteriaIMRN []= $searchCriteriaIMRN;
        return $this;
    }


}


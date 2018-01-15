<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest
 *
 * Get a list of BroadWorks Mobility IMRN numbers from a Mobile Network.
 *         The response is either a
 * SystemBroadWorksMobilityGetMobileNetworkIMRNListResponse
 *         or an ErrorResponse.
 */
class SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mobileNetworkName
     * @var string|null
     */
    private $mobileNetworkName = null;

    /**
     * @ElementName searchCriteriaIMRN
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN[]
     */
    private $searchCriteriaIMRN = array(
        
    );

    /**
     * Getter for mobileNetworkName
     *
     * @ElementName mobileNetworkName
     * @return string|null
     */
    public function getMobileNetworkName()
    {
        return $this->mobileNetworkName;
    }

    /**
     * Setter for mobileNetworkName
     *
     * @ElementName mobileNetworkName
     * @param string|null $mobileNetworkName
     * @return $this
     */
    public function setMobileNetworkName($mobileNetworkName)
    {
        $this->mobileNetworkName = $mobileNetworkName;
        return $this;
    }

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


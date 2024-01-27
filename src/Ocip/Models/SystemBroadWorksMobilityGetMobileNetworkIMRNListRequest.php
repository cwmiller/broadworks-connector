<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest
 *
 * Get a list of BroadWorks Mobility IMRN numbers from a Mobile Network.
 *         The response is either a SystemBroadWorksMobilityGetMobileNetworkIMRNListResponse
 *         or an ErrorResponse.
 *
 * @see SystemBroadWorksMobilityGetMobileNetworkIMRNListResponse
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:998","type":"sequence"}]
 */
class SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName mobileNetworkName
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:998
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $mobileNetworkName = null;

    /**
     * @ElementName searchCriteriaIMRN
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN
     * @Array
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:998
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN[]
     */
    protected $searchCriteriaIMRN = [
        
    ];

    /**
     * Getter for mobileNetworkName
     *
     * @return string
     */
    public function getMobileNetworkName()
    {
        return $this->mobileNetworkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNetworkName;
    }

    /**
     * Setter for mobileNetworkName
     *
     * @param string $mobileNetworkName
     * @return $this
     */
    public function setMobileNetworkName($mobileNetworkName)
    {
        $this->mobileNetworkName = $mobileNetworkName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNetworkName()
    {
        $this->mobileNetworkName = null;
        return $this;
    }

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


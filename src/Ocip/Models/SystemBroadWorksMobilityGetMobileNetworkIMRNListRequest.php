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
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:999","type":"sequence"}]
 */
class SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mobileNetworkName
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:999
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $mobileNetworkName = null;

    /**
     * @ElementName searchCriteriaIMRN
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN
     * @Array
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:999
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN[]
     */
    private $searchCriteriaIMRN = array(
        
    );

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


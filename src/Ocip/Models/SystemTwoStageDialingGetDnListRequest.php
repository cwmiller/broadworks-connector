<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTwoStageDialingGetDnListRequest
 *
 * Request to get a list of Two Stage Dialing dns defined in the system.
 *           The response is either a SystemTwoStageDialingGetDnListResponse
 *           or an ErrorResponse.
 *
 * @see SystemTwoStageDialingGetDnListResponse
 * @see ErrorResponse
 * @Groups [{"id":"2a1428f64736d8f970ea802e5a73c495:80","type":"sequence"}]
 */
class SystemTwoStageDialingGetDnListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 2a1428f64736d8f970ea802e5a73c495:80
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaSystemServiceDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn
     * @Array
     * @Optional
     * @Group 2a1428f64736d8f970ea802e5a73c495:80
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn[]
     */
    private $searchCriteriaSystemServiceDn = array(
        
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
     * Getter for searchCriteriaSystemServiceDn
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn[]
     */
    public function getSearchCriteriaSystemServiceDn()
    {
        return $this->searchCriteriaSystemServiceDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaSystemServiceDn;
    }

    /**
     * Setter for searchCriteriaSystemServiceDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn[] $searchCriteriaSystemServiceDn
     * @return $this
     */
    public function setSearchCriteriaSystemServiceDn(array $searchCriteriaSystemServiceDn)
    {
        $this->searchCriteriaSystemServiceDn = $searchCriteriaSystemServiceDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaSystemServiceDn()
    {
        $this->searchCriteriaSystemServiceDn = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaSystemServiceDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn $searchCriteriaSystemServiceDn
     * @return $this
     */
    public function addSearchCriteriaSystemServiceDn($searchCriteriaSystemServiceDn)
    {
        $this->searchCriteriaSystemServiceDn[] = $searchCriteriaSystemServiceDn;
        return $this;
    }


}


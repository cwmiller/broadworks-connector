<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetSummaryListRequest
 *
 * Request a summary table of all DNs in the system. If resellerId is specified, 
 *         the DNs assigned to the enterprises/service providers within the reseller are returned.
 *         If reseller administrator sends the request and resellerId is not specified, the administrator's resellerId is used.
 *         The search can be done using multiple criteria. Only results matching all the search criteria are included in the results.
 *         
 *         The response is either SystemDnGetSummaryListResponse or ErrorResponse.
 *         
 *         The following data elements are only used in AS data mode:
 *           resellerId
 *         
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           searchCriteriaDn, searchCriteriaServiceProviderId, searchCriteriaExactOrganizationType
 *
 * @see SystemDnGetSummaryListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8222","type":"sequence"}]
 */
class SystemDnGetSummaryListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8222
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName searchCriteriaDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8222
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    private $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceProviderId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8222
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    private $searchCriteriaServiceProviderId = array(
        
    );

    /**
     * @ElementName searchCriteriaExactOrganizationType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8222
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType|null
     */
    private $searchCriteriaExactOrganizationType = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaDn
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDn;
    }

    /**
     * Setter for searchCriteriaDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[] $searchCriteriaDn
     * @return $this
     */
    public function setSearchCriteriaDn(array $searchCriteriaDn)
    {
        $this->searchCriteriaDn = $searchCriteriaDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDn()
    {
        $this->searchCriteriaDn = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn $searchCriteriaDn
     * @return $this
     */
    public function addSearchCriteriaDn($searchCriteriaDn)
    {
        $this->searchCriteriaDn[] = $searchCriteriaDn;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceProviderId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    public function getSearchCriteriaServiceProviderId()
    {
        return $this->searchCriteriaServiceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceProviderId;
    }

    /**
     * Setter for searchCriteriaServiceProviderId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[] $searchCriteriaServiceProviderId
     * @return $this
     */
    public function setSearchCriteriaServiceProviderId(array $searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceProviderId()
    {
        $this->searchCriteriaServiceProviderId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId
     * @return $this
     */
    public function addSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId[] = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactOrganizationType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType
     */
    public function getSearchCriteriaExactOrganizationType()
    {
        return $this->searchCriteriaExactOrganizationType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactOrganizationType;
    }

    /**
     * Setter for searchCriteriaExactOrganizationType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType $searchCriteriaExactOrganizationType
     * @return $this
     */
    public function setSearchCriteriaExactOrganizationType(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType $searchCriteriaExactOrganizationType)
    {
        $this->searchCriteriaExactOrganizationType = $searchCriteriaExactOrganizationType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactOrganizationType()
    {
        $this->searchCriteriaExactOrganizationType = null;
        return $this;
    }


}


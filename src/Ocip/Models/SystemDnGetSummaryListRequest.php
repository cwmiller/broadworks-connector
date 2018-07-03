<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetSummaryListRequest
 *
 * Request a summary table of all DNs in the system. If resellerId is specified, 
 *         the DNs assigned to the enterprises/service providers within the
 * reseller are returned.
 *         If reseller administrator sends the request and resellerId is not
 * specified, the administrator's resellerId is used.
 *         The search can be done using multiple criteria. Only results matching
 * all the search criteria are included in the results.
 *         
 *         The response is either SystemDnGetSummaryListResponse or ErrorResponse.
 *         
 *         The following data elements are only used in AS data mode:
 *           resellerId
 *         
 *         The following elements are only used in XS data mode and ignored in AS
 * data mode:
 *           searchCriteriaDn, searchCriteriaServiceProviderId,
 * searchCriteriaExactOrganizationType
 *
 * @see SystemDnGetSummaryListResponse
 * @see ErrorResponse
 */
class SystemDnGetSummaryListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName searchCriteriaDn
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    private $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceProviderId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    private $searchCriteriaServiceProviderId = array(
        
    );

    /**
     * @ElementName searchCriteriaExactOrganizationType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType|null
     */
    private $searchCriteriaExactOrganizationType = null;

    /**
     * Getter for resellerId
     *
     * @ElementName resellerId
     * @return string|null
     */
    public function getResellerId()
    {
        return $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @ElementName resellerId
     * @param string|null $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * Getter for searchCriteriaDn
     *
     * @ElementName searchCriteriaDn
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn;
    }

    /**
     * Setter for searchCriteriaDn
     *
     * @ElementName searchCriteriaDn
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[] $searchCriteriaDn
     * @return $this
     */
    public function setSearchCriteriaDn($searchCriteriaDn)
    {
        $this->searchCriteriaDn = $searchCriteriaDn;
        return $this;
    }

    /**
     * Adder for searchCriteriaDn
     *
     * @ElementName searchCriteriaDn
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn $searchCriteriaDn
     * @return $this
     */
    public function addSearchCriteriaDn($searchCriteriaDn)
    {
        $this->searchCriteriaDn []= $searchCriteriaDn;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    public function getSearchCriteriaServiceProviderId()
    {
        return $this->searchCriteriaServiceProviderId;
    }

    /**
     * Setter for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[] $searchCriteriaServiceProviderId
     * @return $this
     */
    public function setSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId
     * @return $this
     */
    public function addSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId []= $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactOrganizationType
     *
     * @ElementName searchCriteriaExactOrganizationType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType|null
     */
    public function getSearchCriteriaExactOrganizationType()
    {
        return $this->searchCriteriaExactOrganizationType;
    }

    /**
     * Setter for searchCriteriaExactOrganizationType
     *
     * @ElementName searchCriteriaExactOrganizationType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType|null $searchCriteriaExactOrganizationType
     * @return $this
     */
    public function setSearchCriteriaExactOrganizationType($searchCriteriaExactOrganizationType)
    {
        $this->searchCriteriaExactOrganizationType = $searchCriteriaExactOrganizationType;
        return $this;
    }


}


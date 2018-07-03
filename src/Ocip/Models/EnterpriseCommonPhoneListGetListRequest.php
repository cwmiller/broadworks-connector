<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCommonPhoneListGetListRequest
 *
 * Get an enterprise's common phone list.
 *         The response is either a EnterpriseCommonPhoneListGetListResponse or an
 * ErrorResponse.
 *         The search can be done using multiple criterion.
 *         If the searchCriteriaModeOr is present, any result matching any one
 * criteria is included in the results. 
 *         Otherwise, only results matching all the search criterion are included
 * in the results. 
 *         If no search criteria is specified, all results are returned.
 *         Specifying searchCriteriaModeOr without any search criteria results in
 * an ErrorResponse.
 *         In all cases, if a responseSizeLimit is specified and the number of
 * matching results is more than this limit, then an
 *         ErrorResponse is returned.
 *
 * @see EnterpriseCommonPhoneListGetListResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @see ErrorResponse
 */
class EnterpriseCommonPhoneListGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

    /**
     * @ElementName searchCriteriaEnterpriseCommonPhoneListName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName[]
     */
    private $searchCriteriaEnterpriseCommonPhoneListName = array(
        
    );

    /**
     * @ElementName searchCriteriaEnterpriseCommonPhoneListNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber[]
     */
    private $searchCriteriaEnterpriseCommonPhoneListNumber = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

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
     * Getter for searchCriteriaModeOr
     *
     * @ElementName searchCriteriaModeOr
     * @return bool|null
     */
    public function getSearchCriteriaModeOr()
    {
        return $this->searchCriteriaModeOr;
    }

    /**
     * Setter for searchCriteriaModeOr
     *
     * @ElementName searchCriteriaModeOr
     * @param bool|null $searchCriteriaModeOr
     * @return $this
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr)
    {
        $this->searchCriteriaModeOr = $searchCriteriaModeOr;
        return $this;
    }

    /**
     * Getter for searchCriteriaEnterpriseCommonPhoneListName
     *
     * @ElementName searchCriteriaEnterpriseCommonPhoneListName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName[]
     */
    public function getSearchCriteriaEnterpriseCommonPhoneListName()
    {
        return $this->searchCriteriaEnterpriseCommonPhoneListName;
    }

    /**
     * Setter for searchCriteriaEnterpriseCommonPhoneListName
     *
     * @ElementName searchCriteriaEnterpriseCommonPhoneListName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName[] $searchCriteriaEnterpriseCommonPhoneListName
     * @return $this
     */
    public function setSearchCriteriaEnterpriseCommonPhoneListName($searchCriteriaEnterpriseCommonPhoneListName)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListName = $searchCriteriaEnterpriseCommonPhoneListName;
        return $this;
    }

    /**
     * Adder for searchCriteriaEnterpriseCommonPhoneListName
     *
     * @ElementName searchCriteriaEnterpriseCommonPhoneListName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName $searchCriteriaEnterpriseCommonPhoneListName
     * @return $this
     */
    public function addSearchCriteriaEnterpriseCommonPhoneListName($searchCriteriaEnterpriseCommonPhoneListName)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListName []= $searchCriteriaEnterpriseCommonPhoneListName;
        return $this;
    }

    /**
     * Getter for searchCriteriaEnterpriseCommonPhoneListNumber
     *
     * @ElementName searchCriteriaEnterpriseCommonPhoneListNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber[]
     */
    public function getSearchCriteriaEnterpriseCommonPhoneListNumber()
    {
        return $this->searchCriteriaEnterpriseCommonPhoneListNumber;
    }

    /**
     * Setter for searchCriteriaEnterpriseCommonPhoneListNumber
     *
     * @ElementName searchCriteriaEnterpriseCommonPhoneListNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber[] $searchCriteriaEnterpriseCommonPhoneListNumber
     * @return $this
     */
    public function setSearchCriteriaEnterpriseCommonPhoneListNumber($searchCriteriaEnterpriseCommonPhoneListNumber)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListNumber = $searchCriteriaEnterpriseCommonPhoneListNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaEnterpriseCommonPhoneListNumber
     *
     * @ElementName searchCriteriaEnterpriseCommonPhoneListNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber $searchCriteriaEnterpriseCommonPhoneListNumber
     * @return $this
     */
    public function addSearchCriteriaEnterpriseCommonPhoneListNumber($searchCriteriaEnterpriseCommonPhoneListNumber)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListNumber []= $searchCriteriaEnterpriseCommonPhoneListNumber;
        return $this;
    }


}


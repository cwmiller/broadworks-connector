<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCommonPhoneListGetListRequest
 *
 * Get an enterprise's common phone list.
 *         The response is either a EnterpriseCommonPhoneListGetListResponse or an ErrorResponse.
 *         The search can be done using multiple criterion.
 *         If the searchCriteriaModeOr is present, any result matching any one criteria is included in the results. 
 *         Otherwise, only results matching all the search criterion are included in the results. 
 *         If no search criteria is specified, all results are returned.
 *         Specifying searchCriteriaModeOr without any search criteria results in an ErrorResponse.
 *         In all cases, if a responseSizeLimit is specified and the number of matching results is more than this limit, then an
 *         ErrorResponse is returned.
 *
 * @see EnterpriseCommonPhoneListGetListResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:456","type":"sequence"}]
 */
class EnterpriseCommonPhoneListGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:456
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:456
     * @MinInclusive 1
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:456
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

    /**
     * @ElementName searchCriteriaEnterpriseCommonPhoneListName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:456
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName[]
     */
    private $searchCriteriaEnterpriseCommonPhoneListName = array(
        
    );

    /**
     * @ElementName searchCriteriaEnterpriseCommonPhoneListNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:456
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber[]
     */
    private $searchCriteriaEnterpriseCommonPhoneListNumber = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

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
     * Getter for searchCriteriaModeOr
     *
     * @return bool
     */
    public function getSearchCriteriaModeOr()
    {
        return $this->searchCriteriaModeOr instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaModeOr;
    }

    /**
     * Setter for searchCriteriaModeOr
     *
     * @param bool $searchCriteriaModeOr
     * @return $this
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr)
    {
        $this->searchCriteriaModeOr = $searchCriteriaModeOr;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaModeOr()
    {
        $this->searchCriteriaModeOr = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaEnterpriseCommonPhoneListName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName[]
     */
    public function getSearchCriteriaEnterpriseCommonPhoneListName()
    {
        return $this->searchCriteriaEnterpriseCommonPhoneListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaEnterpriseCommonPhoneListName;
    }

    /**
     * Setter for searchCriteriaEnterpriseCommonPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName[] $searchCriteriaEnterpriseCommonPhoneListName
     * @return $this
     */
    public function setSearchCriteriaEnterpriseCommonPhoneListName(array $searchCriteriaEnterpriseCommonPhoneListName)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListName = $searchCriteriaEnterpriseCommonPhoneListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaEnterpriseCommonPhoneListName()
    {
        $this->searchCriteriaEnterpriseCommonPhoneListName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaEnterpriseCommonPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName $searchCriteriaEnterpriseCommonPhoneListName
     * @return $this
     */
    public function addSearchCriteriaEnterpriseCommonPhoneListName($searchCriteriaEnterpriseCommonPhoneListName)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListName[] = $searchCriteriaEnterpriseCommonPhoneListName;
        return $this;
    }

    /**
     * Getter for searchCriteriaEnterpriseCommonPhoneListNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber[]
     */
    public function getSearchCriteriaEnterpriseCommonPhoneListNumber()
    {
        return $this->searchCriteriaEnterpriseCommonPhoneListNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaEnterpriseCommonPhoneListNumber;
    }

    /**
     * Setter for searchCriteriaEnterpriseCommonPhoneListNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber[] $searchCriteriaEnterpriseCommonPhoneListNumber
     * @return $this
     */
    public function setSearchCriteriaEnterpriseCommonPhoneListNumber(array $searchCriteriaEnterpriseCommonPhoneListNumber)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListNumber = $searchCriteriaEnterpriseCommonPhoneListNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaEnterpriseCommonPhoneListNumber()
    {
        $this->searchCriteriaEnterpriseCommonPhoneListNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaEnterpriseCommonPhoneListNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber $searchCriteriaEnterpriseCommonPhoneListNumber
     * @return $this
     */
    public function addSearchCriteriaEnterpriseCommonPhoneListNumber($searchCriteriaEnterpriseCommonPhoneListNumber)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListNumber[] = $searchCriteriaEnterpriseCommonPhoneListNumber;
        return $this;
    }


}


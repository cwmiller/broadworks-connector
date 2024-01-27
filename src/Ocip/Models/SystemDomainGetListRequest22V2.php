<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainGetListRequest22V2
 *
 * Requests the list of all matching system-level domains and all matching reseller level domains. 
 *         If excludeReseller is specified, returns all matching system-level domain names only. 
 *         If resellerId is specified, returns all matching system-level domain names and the given reseller's domains. 
 *         If reseller administrator sends the request and resellerId is not specified, the administrator's resellerId is used.
 *         
 *         The response is either SystemDomainGetListResponse22V2 or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and will be ingored in XS data mode:
 *           includeReseller
 *           resellerId
 *           responseSizeLimit
 *           searchCriteriaDomainName
 *           searchCriteriaResellerId
 *           searchCriteriaExactDomainLevel
 *
 * @see SystemDomainGetListResponse22V2
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9619","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:9620","type":"choice"}]}]
 */
class SystemDomainGetListRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName excludeReseller
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9620
     * @var bool|null
     */
    protected $excludeReseller = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9620
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9619
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDomainName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDomainName
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9619
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDomainName[]
     */
    protected $searchCriteriaDomainName = [
        
    ];

    /**
     * @ElementName searchCriteriaResellerId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9619
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    protected $searchCriteriaResellerId = [
        
    ];

    /**
     * @ElementName searchCriteriaExactDomainLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDomainLevel
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9619
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDomainLevel[]
     */
    protected $searchCriteriaExactDomainLevel = [
        
    ];

    /**
     * Getter for excludeReseller
     *
     * @return bool
     */
    public function getExcludeReseller()
    {
        return $this->excludeReseller instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludeReseller;
    }

    /**
     * Setter for excludeReseller
     *
     * @param bool $excludeReseller
     * @return $this
     */
    public function setExcludeReseller($excludeReseller)
    {
        $this->excludeReseller = $excludeReseller;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludeReseller()
    {
        $this->excludeReseller = null;
        return $this;
    }

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
     * Getter for searchCriteriaDomainName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDomainName[]
     */
    public function getSearchCriteriaDomainName()
    {
        return $this->searchCriteriaDomainName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDomainName;
    }

    /**
     * Setter for searchCriteriaDomainName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDomainName[] $searchCriteriaDomainName
     * @return $this
     */
    public function setSearchCriteriaDomainName(array $searchCriteriaDomainName)
    {
        $this->searchCriteriaDomainName = $searchCriteriaDomainName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDomainName()
    {
        $this->searchCriteriaDomainName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDomainName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDomainName $searchCriteriaDomainName
     * @return $this
     */
    public function addSearchCriteriaDomainName($searchCriteriaDomainName)
    {
        $this->searchCriteriaDomainName[] = $searchCriteriaDomainName;
        return $this;
    }

    /**
     * Getter for searchCriteriaResellerId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    public function getSearchCriteriaResellerId()
    {
        return $this->searchCriteriaResellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaResellerId;
    }

    /**
     * Setter for searchCriteriaResellerId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[] $searchCriteriaResellerId
     * @return $this
     */
    public function setSearchCriteriaResellerId(array $searchCriteriaResellerId)
    {
        $this->searchCriteriaResellerId = $searchCriteriaResellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaResellerId()
    {
        $this->searchCriteriaResellerId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaResellerId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId $searchCriteriaResellerId
     * @return $this
     */
    public function addSearchCriteriaResellerId($searchCriteriaResellerId)
    {
        $this->searchCriteriaResellerId[] = $searchCriteriaResellerId;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDomainLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDomainLevel[]
     */
    public function getSearchCriteriaExactDomainLevel()
    {
        return $this->searchCriteriaExactDomainLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactDomainLevel;
    }

    /**
     * Setter for searchCriteriaExactDomainLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDomainLevel[] $searchCriteriaExactDomainLevel
     * @return $this
     */
    public function setSearchCriteriaExactDomainLevel(array $searchCriteriaExactDomainLevel)
    {
        $this->searchCriteriaExactDomainLevel = $searchCriteriaExactDomainLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactDomainLevel()
    {
        $this->searchCriteriaExactDomainLevel = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactDomainLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDomainLevel $searchCriteriaExactDomainLevel
     * @return $this
     */
    public function addSearchCriteriaExactDomainLevel($searchCriteriaExactDomainLevel)
    {
        $this->searchCriteriaExactDomainLevel[] = $searchCriteriaExactDomainLevel;
        return $this;
    }
}


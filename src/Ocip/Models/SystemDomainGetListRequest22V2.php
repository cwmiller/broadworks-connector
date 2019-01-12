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
 *         The following elements are only used in AS data mode and will be ignored in XS data mode:
 *           includeReseller
 *           resellerId
 *           responseSizeLimit
 *           searchCriteriaDomainName
 *
 * @see SystemDomainGetListResponse22V2
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8088","type":"sequence","children":[{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8089","type":"choice"}]}]
 */
class SystemDomainGetListRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName excludeReseller
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8089
     * @var bool|null
     */
    private $excludeReseller = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8089
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8088
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDomainName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDomainName
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8088
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDomainName[]
     */
    private $searchCriteriaDomainName = array(
        
    );

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


}


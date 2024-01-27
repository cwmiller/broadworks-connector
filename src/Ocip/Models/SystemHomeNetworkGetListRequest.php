<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHomeNetworkGetListRequest
 *
 * Get the list of all Home Networks.
 *         The response is either a SystemHomeNetworkGetListResponse or an ErrorResponse.
 *
 * @see SystemHomeNetworkGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11368","type":"sequence"}]
 */
class SystemHomeNetworkGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:11368
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaHomeMscAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaHomeMscAddress
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:11368
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaHomeMscAddress[]
     */
    protected $searchCriteriaHomeMscAddress = [
        
    ];

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
     * Getter for searchCriteriaHomeMscAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaHomeMscAddress[]
     */
    public function getSearchCriteriaHomeMscAddress()
    {
        return $this->searchCriteriaHomeMscAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaHomeMscAddress;
    }

    /**
     * Setter for searchCriteriaHomeMscAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaHomeMscAddress[] $searchCriteriaHomeMscAddress
     * @return $this
     */
    public function setSearchCriteriaHomeMscAddress(array $searchCriteriaHomeMscAddress)
    {
        $this->searchCriteriaHomeMscAddress = $searchCriteriaHomeMscAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaHomeMscAddress()
    {
        $this->searchCriteriaHomeMscAddress = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaHomeMscAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaHomeMscAddress $searchCriteriaHomeMscAddress
     * @return $this
     */
    public function addSearchCriteriaHomeMscAddress($searchCriteriaHomeMscAddress)
    {
        $this->searchCriteriaHomeMscAddress[] = $searchCriteriaHomeMscAddress;
        return $this;
    }
}


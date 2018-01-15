<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHomeNetworkGetListRequest
 *
 * Get the list of all Home Networks.
 *         The response is either a SystemHomeNetworkGetListResponse or an
 * ErrorResponse.
 */
class SystemHomeNetworkGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaHomeMscAddress
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaHomeMscAddress[]
     */
    private $searchCriteriaHomeMscAddress = array(
        
    );

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
     * Getter for searchCriteriaHomeMscAddress
     *
     * @ElementName searchCriteriaHomeMscAddress
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaHomeMscAddress[]
     */
    public function getSearchCriteriaHomeMscAddress()
    {
        return $this->searchCriteriaHomeMscAddress;
    }

    /**
     * Setter for searchCriteriaHomeMscAddress
     *
     * @ElementName searchCriteriaHomeMscAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaHomeMscAddress[] $searchCriteriaHomeMscAddress
     * @return $this
     */
    public function setSearchCriteriaHomeMscAddress($searchCriteriaHomeMscAddress)
    {
        $this->searchCriteriaHomeMscAddress = $searchCriteriaHomeMscAddress;
        return $this;
    }

    /**
     * Adder for searchCriteriaHomeMscAddress
     *
     * @ElementName searchCriteriaHomeMscAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaHomeMscAddress $searchCriteriaHomeMscAddress
     * @return $this
     */
    public function addSearchCriteriaHomeMscAddress($searchCriteriaHomeMscAddress)
    {
        $this->searchCriteriaHomeMscAddress []= $searchCriteriaHomeMscAddress;
        return $this;
    }


}


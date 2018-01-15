<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoamingNetworkGetListRequest
 *
 * Get the list of all Roaming Networks.
 *         The response is either a SystemRoamingNetworkGetListResponse or an
 * ErrorResponse.
 */
class SystemRoamingNetworkGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaRoamingMscAddress
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoamingMscAddress[]
     */
    private $searchCriteriaRoamingMscAddress = array(
        
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
     * Getter for searchCriteriaRoamingMscAddress
     *
     * @ElementName searchCriteriaRoamingMscAddress
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoamingMscAddress[]
     */
    public function getSearchCriteriaRoamingMscAddress()
    {
        return $this->searchCriteriaRoamingMscAddress;
    }

    /**
     * Setter for searchCriteriaRoamingMscAddress
     *
     * @ElementName searchCriteriaRoamingMscAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoamingMscAddress[] $searchCriteriaRoamingMscAddress
     * @return $this
     */
    public function setSearchCriteriaRoamingMscAddress($searchCriteriaRoamingMscAddress)
    {
        $this->searchCriteriaRoamingMscAddress = $searchCriteriaRoamingMscAddress;
        return $this;
    }

    /**
     * Adder for searchCriteriaRoamingMscAddress
     *
     * @ElementName searchCriteriaRoamingMscAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoamingMscAddress $searchCriteriaRoamingMscAddress
     * @return $this
     */
    public function addSearchCriteriaRoamingMscAddress($searchCriteriaRoamingMscAddress)
    {
        $this->searchCriteriaRoamingMscAddress []= $searchCriteriaRoamingMscAddress;
        return $this;
    }


}


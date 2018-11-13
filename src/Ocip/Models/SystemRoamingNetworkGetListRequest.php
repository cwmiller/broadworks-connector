<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoamingNetworkGetListRequest
 *
 * Get the list of all Roaming Networks.
 *         The response is either a SystemRoamingNetworkGetListResponse or an
 * ErrorResponse.
 *
 * @see SystemRoamingNetworkGetListResponse
 * @see ErrorResponse
 */
class SystemRoamingNetworkGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaRoamingMscAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoamingMscAddress
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoamingMscAddress[]
     */
    private $searchCriteriaRoamingMscAddress = array(
        
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
     * Getter for searchCriteriaRoamingMscAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoamingMscAddress[]
     */
    public function getSearchCriteriaRoamingMscAddress()
    {
        return $this->searchCriteriaRoamingMscAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaRoamingMscAddress;
    }

    /**
     * Setter for searchCriteriaRoamingMscAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoamingMscAddress[] $searchCriteriaRoamingMscAddress
     * @return $this
     */
    public function setSearchCriteriaRoamingMscAddress(array $searchCriteriaRoamingMscAddress)
    {
        $this->searchCriteriaRoamingMscAddress = $searchCriteriaRoamingMscAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaRoamingMscAddress()
    {
        $this->searchCriteriaRoamingMscAddress = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaRoamingMscAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoamingMscAddress $searchCriteriaRoamingMscAddress
     * @return $this
     */
    public function addSearchCriteriaRoamingMscAddress($searchCriteriaRoamingMscAddress)
    {
        $this->searchCriteriaRoamingMscAddress[] = $searchCriteriaRoamingMscAddress;
        return $this;
    }


}


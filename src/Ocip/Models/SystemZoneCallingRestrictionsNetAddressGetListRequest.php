<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingRestrictionsNetAddressGetListRequest
 *
 * Gets a list of IP Addresses and/or Ranges assigned to a zone
 * 	Response is SystemZoneCallingRestrictionsNetAddressGetListResponse.
 *         Replaced by: SystemZoneNetAddressGetListRequest
 */
class SystemZoneCallingRestrictionsNetAddressGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @var string|null
     */
    private $zoneName = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaZoneIPAddress
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaZoneIPAddress[]
     */
    private $searchCriteriaZoneIPAddress = array(
        
    );

    /**
     * Getter for zoneName
     *
     * @ElementName zoneName
     * @return string|null
     */
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * Setter for zoneName
     *
     * @ElementName zoneName
     * @param string|null $zoneName
     * @return $this
     */
    public function setZoneName($zoneName)
    {
        $this->zoneName = $zoneName;
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
     * Getter for searchCriteriaZoneIPAddress
     *
     * @ElementName searchCriteriaZoneIPAddress
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaZoneIPAddress[]
     */
    public function getSearchCriteriaZoneIPAddress()
    {
        return $this->searchCriteriaZoneIPAddress;
    }

    /**
     * Setter for searchCriteriaZoneIPAddress
     *
     * @ElementName searchCriteriaZoneIPAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaZoneIPAddress[] $searchCriteriaZoneIPAddress
     * @return $this
     */
    public function setSearchCriteriaZoneIPAddress($searchCriteriaZoneIPAddress)
    {
        $this->searchCriteriaZoneIPAddress = $searchCriteriaZoneIPAddress;
        return $this;
    }

    /**
     * Adder for searchCriteriaZoneIPAddress
     *
     * @ElementName searchCriteriaZoneIPAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaZoneIPAddress $searchCriteriaZoneIPAddress
     * @return $this
     */
    public function addSearchCriteriaZoneIPAddress($searchCriteriaZoneIPAddress)
    {
        $this->searchCriteriaZoneIPAddress []= $searchCriteriaZoneIPAddress;
        return $this;
    }


}


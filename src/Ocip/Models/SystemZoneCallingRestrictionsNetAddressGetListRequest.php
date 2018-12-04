<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingRestrictionsNetAddressGetListRequest
 *
 * Gets a list of IP Addresses and/or Ranges assigned to a zone
 *   Response is SystemZoneCallingRestrictionsNetAddressGetListResponse.
 *         Replaced by: SystemZoneNetAddressGetListRequest
 *
 * @see SystemZoneCallingRestrictionsNetAddressGetListResponse
 * @see SystemZoneNetAddressGetListRequest
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:32117","type":"sequence"}]
 */
class SystemZoneCallingRestrictionsNetAddressGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:32117
     * @var string|null
     */
    private $zoneName = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:32117
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaZoneIPAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaZoneIPAddress
     * @Array
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:32117
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaZoneIPAddress[]
     */
    private $searchCriteriaZoneIPAddress = array(
        
    );

    /**
     * Getter for zoneName
     *
     * @return string
     */
    public function getZoneName()
    {
        return $this->zoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->zoneName;
    }

    /**
     * Setter for zoneName
     *
     * @param string $zoneName
     * @return $this
     */
    public function setZoneName($zoneName)
    {
        $this->zoneName = $zoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetZoneName()
    {
        $this->zoneName = null;
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
     * Getter for searchCriteriaZoneIPAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaZoneIPAddress[]
     */
    public function getSearchCriteriaZoneIPAddress()
    {
        return $this->searchCriteriaZoneIPAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaZoneIPAddress;
    }

    /**
     * Setter for searchCriteriaZoneIPAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaZoneIPAddress[] $searchCriteriaZoneIPAddress
     * @return $this
     */
    public function setSearchCriteriaZoneIPAddress(array $searchCriteriaZoneIPAddress)
    {
        $this->searchCriteriaZoneIPAddress = $searchCriteriaZoneIPAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaZoneIPAddress()
    {
        $this->searchCriteriaZoneIPAddress = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaZoneIPAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaZoneIPAddress $searchCriteriaZoneIPAddress
     * @return $this
     */
    public function addSearchCriteriaZoneIPAddress($searchCriteriaZoneIPAddress)
    {
        $this->searchCriteriaZoneIPAddress[] = $searchCriteriaZoneIPAddress;
        return $this;
    }


}


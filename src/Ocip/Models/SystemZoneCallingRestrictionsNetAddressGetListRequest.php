<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingRestrictionsNetAddressGetListRequest
 *
 * Gets a list of IP Addresses and/or Ranges assigned to a zone
 *         The response is either a SystemZoneCallingRestrictionsNetAddressGetListResponse or ErrorResponse
 *         Replaced by: SystemZoneNetAddressGetListRequest
 *
 * @see SystemZoneCallingRestrictionsNetAddressGetListResponse
 * @see ErrorResponse
 * @see SystemZoneNetAddressGetListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:39923","type":"sequence"}]
 */
class SystemZoneCallingRestrictionsNetAddressGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName zoneName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:39923
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $zoneName = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39923
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaZoneIPAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaZoneIPAddress
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39923
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaZoneIPAddress[]
     */
    protected $searchCriteriaZoneIPAddress = [
        
    ];

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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetListRequest14
 *
 * Requests the list of access devices defined at the System-level.
 *         Prior to release 14, this command requested a list of all devices in the entire system. That
 *         functionality is now moved to the SystemAccessDeviceGetAllRequest.
 *         The response is either SystemAccessDeviceGetListResponse14 or ErrorResponse.
 *
 * @see SystemAccessDeviceGetAllRequest
 * @see SystemAccessDeviceGetListResponse14
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1242","type":"sequence"}]
 */
class SystemAccessDeviceGetListRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1242
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDeviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1242
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[]
     */
    protected $searchCriteriaDeviceName = [
        
    ];

    /**
     * @ElementName searchCriteriaDeviceMACAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1242
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[]
     */
    protected $searchCriteriaDeviceMACAddress = [
        
    ];

    /**
     * @ElementName searchCriteriaDeviceNetAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1242
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[]
     */
    protected $searchCriteriaDeviceNetAddress = [
        
    ];

    /**
     * @ElementName searchCriteriaExactDeviceType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1242
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType|null
     */
    protected $searchCriteriaExactDeviceType = null;

    /**
     * @ElementName searchCriteriaAccessDeviceVersion
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1242
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion[]
     */
    protected $searchCriteriaAccessDeviceVersion = [
        
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
     * Getter for searchCriteriaDeviceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[]
     */
    public function getSearchCriteriaDeviceName()
    {
        return $this->searchCriteriaDeviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDeviceName;
    }

    /**
     * Setter for searchCriteriaDeviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[] $searchCriteriaDeviceName
     * @return $this
     */
    public function setSearchCriteriaDeviceName(array $searchCriteriaDeviceName)
    {
        $this->searchCriteriaDeviceName = $searchCriteriaDeviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDeviceName()
    {
        $this->searchCriteriaDeviceName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName $searchCriteriaDeviceName
     * @return $this
     */
    public function addSearchCriteriaDeviceName($searchCriteriaDeviceName)
    {
        $this->searchCriteriaDeviceName[] = $searchCriteriaDeviceName;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceMACAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[]
     */
    public function getSearchCriteriaDeviceMACAddress()
    {
        return $this->searchCriteriaDeviceMACAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDeviceMACAddress;
    }

    /**
     * Setter for searchCriteriaDeviceMACAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[] $searchCriteriaDeviceMACAddress
     * @return $this
     */
    public function setSearchCriteriaDeviceMACAddress(array $searchCriteriaDeviceMACAddress)
    {
        $this->searchCriteriaDeviceMACAddress = $searchCriteriaDeviceMACAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDeviceMACAddress()
    {
        $this->searchCriteriaDeviceMACAddress = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceMACAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress
     * @return $this
     */
    public function addSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress)
    {
        $this->searchCriteriaDeviceMACAddress[] = $searchCriteriaDeviceMACAddress;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceNetAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[]
     */
    public function getSearchCriteriaDeviceNetAddress()
    {
        return $this->searchCriteriaDeviceNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDeviceNetAddress;
    }

    /**
     * Setter for searchCriteriaDeviceNetAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[] $searchCriteriaDeviceNetAddress
     * @return $this
     */
    public function setSearchCriteriaDeviceNetAddress(array $searchCriteriaDeviceNetAddress)
    {
        $this->searchCriteriaDeviceNetAddress = $searchCriteriaDeviceNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDeviceNetAddress()
    {
        $this->searchCriteriaDeviceNetAddress = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceNetAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress
     * @return $this
     */
    public function addSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress)
    {
        $this->searchCriteriaDeviceNetAddress[] = $searchCriteriaDeviceNetAddress;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType
     */
    public function getSearchCriteriaExactDeviceType()
    {
        return $this->searchCriteriaExactDeviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactDeviceType;
    }

    /**
     * Setter for searchCriteriaExactDeviceType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType
     * @return $this
     */
    public function setSearchCriteriaExactDeviceType(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType)
    {
        $this->searchCriteriaExactDeviceType = $searchCriteriaExactDeviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactDeviceType()
    {
        $this->searchCriteriaExactDeviceType = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaAccessDeviceVersion
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion[]
     */
    public function getSearchCriteriaAccessDeviceVersion()
    {
        return $this->searchCriteriaAccessDeviceVersion instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAccessDeviceVersion;
    }

    /**
     * Setter for searchCriteriaAccessDeviceVersion
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion[] $searchCriteriaAccessDeviceVersion
     * @return $this
     */
    public function setSearchCriteriaAccessDeviceVersion(array $searchCriteriaAccessDeviceVersion)
    {
        $this->searchCriteriaAccessDeviceVersion = $searchCriteriaAccessDeviceVersion;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAccessDeviceVersion()
    {
        $this->searchCriteriaAccessDeviceVersion = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAccessDeviceVersion
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion $searchCriteriaAccessDeviceVersion
     * @return $this
     */
    public function addSearchCriteriaAccessDeviceVersion($searchCriteriaAccessDeviceVersion)
    {
        $this->searchCriteriaAccessDeviceVersion[] = $searchCriteriaAccessDeviceVersion;
        return $this;
    }
}


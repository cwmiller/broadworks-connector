<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetAllRequest
 *
 * Requests the list of all access devices in the entire system.
 *         Prior to release 14, this functionality was provided with the
 * SystemAccessDeviceGetListRequest14.
 *         If reseller administrator sends the request, searchCriteriaResellerId is
 * ignored. All the device 
 *         profiles in the administrator's reseller meeting the search criteria are
 * returned.
 *         
 *         The response is either SystemAccessDeviceGetAllResponse or
 * ErrorResponse.
 *         
 *         The following data elements are only used in AS data mode:
 *           searchCriteriaResellerId
 *
 * @see SystemAccessDeviceGetListRequest14
 * @see SystemAccessDeviceGetAllResponse
 * @see ErrorResponse
 */
class SystemAccessDeviceGetAllRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDeviceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[]
     */
    private $searchCriteriaDeviceName = array(
        
    );

    /**
     * @ElementName searchCriteriaDeviceMACAddress
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[]
     */
    private $searchCriteriaDeviceMACAddress = array(
        
    );

    /**
     * @ElementName searchCriteriaDeviceNetAddress
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[]
     */
    private $searchCriteriaDeviceNetAddress = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    private $searchCriteriaGroupId = array(
        
    );

    /**
     * @ElementName searchCriteriaExactDeviceType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType|null
     */
    private $searchCriteriaExactDeviceType = null;

    /**
     * @ElementName searchCriteriaExactDeviceServiceProvider
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceServiceProvider|null
     */
    private $searchCriteriaExactDeviceServiceProvider = null;

    /**
     * @ElementName searchCriteriaServiceProviderId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    private $searchCriteriaServiceProviderId = array(
        
    );

    /**
     * @ElementName searchCriteriaResellerId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    private $searchCriteriaResellerId = array(
        
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
     * Getter for searchCriteriaDeviceName
     *
     * @ElementName searchCriteriaDeviceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[]
     */
    public function getSearchCriteriaDeviceName()
    {
        return $this->searchCriteriaDeviceName;
    }

    /**
     * Setter for searchCriteriaDeviceName
     *
     * @ElementName searchCriteriaDeviceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[] $searchCriteriaDeviceName
     * @return $this
     */
    public function setSearchCriteriaDeviceName(array $searchCriteriaDeviceName)
    {
        $this->searchCriteriaDeviceName = $searchCriteriaDeviceName;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceName
     *
     * @ElementName searchCriteriaDeviceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName $searchCriteriaDeviceName
     * @return $this
     */
    public function addSearchCriteriaDeviceName($searchCriteriaDeviceName)
    {
        $this->searchCriteriaDeviceName []= $searchCriteriaDeviceName;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceMACAddress
     *
     * @ElementName searchCriteriaDeviceMACAddress
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[]
     */
    public function getSearchCriteriaDeviceMACAddress()
    {
        return $this->searchCriteriaDeviceMACAddress;
    }

    /**
     * Setter for searchCriteriaDeviceMACAddress
     *
     * @ElementName searchCriteriaDeviceMACAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[] $searchCriteriaDeviceMACAddress
     * @return $this
     */
    public function setSearchCriteriaDeviceMACAddress(array $searchCriteriaDeviceMACAddress)
    {
        $this->searchCriteriaDeviceMACAddress = $searchCriteriaDeviceMACAddress;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceMACAddress
     *
     * @ElementName searchCriteriaDeviceMACAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress
     * @return $this
     */
    public function addSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress)
    {
        $this->searchCriteriaDeviceMACAddress []= $searchCriteriaDeviceMACAddress;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceNetAddress
     *
     * @ElementName searchCriteriaDeviceNetAddress
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[]
     */
    public function getSearchCriteriaDeviceNetAddress()
    {
        return $this->searchCriteriaDeviceNetAddress;
    }

    /**
     * Setter for searchCriteriaDeviceNetAddress
     *
     * @ElementName searchCriteriaDeviceNetAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[] $searchCriteriaDeviceNetAddress
     * @return $this
     */
    public function setSearchCriteriaDeviceNetAddress(array $searchCriteriaDeviceNetAddress)
    {
        $this->searchCriteriaDeviceNetAddress = $searchCriteriaDeviceNetAddress;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceNetAddress
     *
     * @ElementName searchCriteriaDeviceNetAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress
     * @return $this
     */
    public function addSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress)
    {
        $this->searchCriteriaDeviceNetAddress []= $searchCriteriaDeviceNetAddress;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId;
    }

    /**
     * Setter for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[] $searchCriteriaGroupId
     * @return $this
     */
    public function setSearchCriteriaGroupId(array $searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId $searchCriteriaGroupId
     * @return $this
     */
    public function addSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId []= $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceType
     *
     * @ElementName searchCriteriaExactDeviceType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType|null
     */
    public function getSearchCriteriaExactDeviceType()
    {
        return $this->searchCriteriaExactDeviceType;
    }

    /**
     * Setter for searchCriteriaExactDeviceType
     *
     * @ElementName searchCriteriaExactDeviceType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType|null $searchCriteriaExactDeviceType
     * @return $this
     */
    public function setSearchCriteriaExactDeviceType(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType)
    {
        $this->searchCriteriaExactDeviceType = $searchCriteriaExactDeviceType;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceServiceProvider
     *
     * @ElementName searchCriteriaExactDeviceServiceProvider
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceServiceProvider|null
     */
    public function getSearchCriteriaExactDeviceServiceProvider()
    {
        return $this->searchCriteriaExactDeviceServiceProvider;
    }

    /**
     * Setter for searchCriteriaExactDeviceServiceProvider
     *
     * @ElementName searchCriteriaExactDeviceServiceProvider
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceServiceProvider|null $searchCriteriaExactDeviceServiceProvider
     * @return $this
     */
    public function setSearchCriteriaExactDeviceServiceProvider(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceServiceProvider $searchCriteriaExactDeviceServiceProvider)
    {
        $this->searchCriteriaExactDeviceServiceProvider = $searchCriteriaExactDeviceServiceProvider;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    public function getSearchCriteriaServiceProviderId()
    {
        return $this->searchCriteriaServiceProviderId;
    }

    /**
     * Setter for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[] $searchCriteriaServiceProviderId
     * @return $this
     */
    public function setSearchCriteriaServiceProviderId(array $searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId
     * @return $this
     */
    public function addSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId []= $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Getter for searchCriteriaResellerId
     *
     * @ElementName searchCriteriaResellerId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    public function getSearchCriteriaResellerId()
    {
        return $this->searchCriteriaResellerId;
    }

    /**
     * Setter for searchCriteriaResellerId
     *
     * @ElementName searchCriteriaResellerId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[] $searchCriteriaResellerId
     * @return $this
     */
    public function setSearchCriteriaResellerId(array $searchCriteriaResellerId)
    {
        $this->searchCriteriaResellerId = $searchCriteriaResellerId;
        return $this;
    }

    /**
     * Adder for searchCriteriaResellerId
     *
     * @ElementName searchCriteriaResellerId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId $searchCriteriaResellerId
     * @return $this
     */
    public function addSearchCriteriaResellerId($searchCriteriaResellerId)
    {
        $this->searchCriteriaResellerId []= $searchCriteriaResellerId;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetListRequest
 *
 * Request to get the list of sip device types in the system.  
 *         If includeSystemLevel is specified, all system level device types and
 * the reseller device types matching search criteria 
 *         are returned even when searchCriteriaResellerId is specified.        
 *         If reseller administrator sends the request, searchCriteriaResellerId is
 * ignored. All system level device 
 *         types and the device types in the administrator's reseller meeting the
 * search criteria are returned.
 *         See Also: SystemDeviceTypeGetAvailableListRequest22 in AS data mode,
 * SystemDeviceTypeGetAvailableListRequest19 in XS data mode.
 *         The response is either SystemSIPDeviceTypeGetListResponse or
 * ErrorResponse.
 */
class SystemSIPDeviceTypeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDeviceType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType[]
     */
    private $searchCriteriaDeviceType = array(
        
    );

    /**
     * @ElementName searchCriteriaExactSignalingAddressType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSignalingAddressType|null
     */
    private $searchCriteriaExactSignalingAddressType = null;

    /**
     * @ElementName searchCriteriaResellerId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    private $searchCriteriaResellerId = array(
        
    );

    /**
     * @ElementName includeSystemLevel
     * @var bool|null
     */
    private $includeSystemLevel = null;

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
     * Getter for searchCriteriaDeviceType
     *
     * @ElementName searchCriteriaDeviceType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType[]
     */
    public function getSearchCriteriaDeviceType()
    {
        return $this->searchCriteriaDeviceType;
    }

    /**
     * Setter for searchCriteriaDeviceType
     *
     * @ElementName searchCriteriaDeviceType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType[] $searchCriteriaDeviceType
     * @return $this
     */
    public function setSearchCriteriaDeviceType($searchCriteriaDeviceType)
    {
        $this->searchCriteriaDeviceType = $searchCriteriaDeviceType;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceType
     *
     * @ElementName searchCriteriaDeviceType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType $searchCriteriaDeviceType
     * @return $this
     */
    public function addSearchCriteriaDeviceType($searchCriteriaDeviceType)
    {
        $this->searchCriteriaDeviceType []= $searchCriteriaDeviceType;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactSignalingAddressType
     *
     * @ElementName searchCriteriaExactSignalingAddressType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSignalingAddressType|null
     */
    public function getSearchCriteriaExactSignalingAddressType()
    {
        return $this->searchCriteriaExactSignalingAddressType;
    }

    /**
     * Setter for searchCriteriaExactSignalingAddressType
     *
     * @ElementName searchCriteriaExactSignalingAddressType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSignalingAddressType|null $searchCriteriaExactSignalingAddressType
     * @return $this
     */
    public function setSearchCriteriaExactSignalingAddressType($searchCriteriaExactSignalingAddressType)
    {
        $this->searchCriteriaExactSignalingAddressType = $searchCriteriaExactSignalingAddressType;
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
    public function setSearchCriteriaResellerId($searchCriteriaResellerId)
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

    /**
     * Getter for includeSystemLevel
     *
     * @ElementName includeSystemLevel
     * @return bool|null
     */
    public function getIncludeSystemLevel()
    {
        return $this->includeSystemLevel;
    }

    /**
     * Setter for includeSystemLevel
     *
     * @ElementName includeSystemLevel
     * @param bool|null $includeSystemLevel
     * @return $this
     */
    public function setIncludeSystemLevel($includeSystemLevel)
    {
        $this->includeSystemLevel = $includeSystemLevel;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetListRequest
 *
 * Request to get the list of sip device types in the system.
 *         If includeSystemLevel is specified, all system level device types and the reseller device types matching search criteria 
 *         are returned even when searchCriteriaResellerId is specified.        
 *         If reseller administrator sends the request, searchCriteriaResellerId is ignored. All system level device 
 *         types and the device types in the administrator's reseller meeting the search criteria are returned.
 *         See Also: SystemDeviceTypeGetAvailableListRequest22 in AS data mode, SystemDeviceTypeGetAvailableListRequest19 in XS data mode.
 *         The response is either SystemSIPDeviceTypeGetListResponse or ErrorResponse.
 *         
 *         The following data elements are only used in AS data mode and ignored in XS data mode:
 *           searchCriteriaExactDeviceTypeConfigurationOptionType
 *
 * @see SystemDeviceTypeGetAvailableListRequest22
 * @see SystemDeviceTypeGetAvailableListRequest19
 * @see SystemSIPDeviceTypeGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17121","type":"sequence"}]
 */
class SystemSIPDeviceTypeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17121
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDeviceType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17121
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType[]
     */
    protected $searchCriteriaDeviceType = array(
        
    );

    /**
     * @ElementName searchCriteriaExactSignalingAddressType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSignalingAddressType
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17121
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSignalingAddressType|null
     */
    protected $searchCriteriaExactSignalingAddressType = null;

    /**
     * @ElementName searchCriteriaResellerId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17121
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    protected $searchCriteriaResellerId = array(
        
    );

    /**
     * @ElementName searchCriteriaDeviceConfigurationOptions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceTypeConfigurationOptionType
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17121
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceTypeConfigurationOptionType[]
     */
    protected $searchCriteriaDeviceConfigurationOptions = array(
        
    );

    /**
     * @ElementName includeSystemLevel
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17121
     * @var bool|null
     */
    protected $includeSystemLevel = null;

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
     * Getter for searchCriteriaDeviceType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType[]
     */
    public function getSearchCriteriaDeviceType()
    {
        return $this->searchCriteriaDeviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDeviceType;
    }

    /**
     * Setter for searchCriteriaDeviceType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType[] $searchCriteriaDeviceType
     * @return $this
     */
    public function setSearchCriteriaDeviceType(array $searchCriteriaDeviceType)
    {
        $this->searchCriteriaDeviceType = $searchCriteriaDeviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDeviceType()
    {
        $this->searchCriteriaDeviceType = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType $searchCriteriaDeviceType
     * @return $this
     */
    public function addSearchCriteriaDeviceType($searchCriteriaDeviceType)
    {
        $this->searchCriteriaDeviceType[] = $searchCriteriaDeviceType;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactSignalingAddressType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSignalingAddressType
     */
    public function getSearchCriteriaExactSignalingAddressType()
    {
        return $this->searchCriteriaExactSignalingAddressType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactSignalingAddressType;
    }

    /**
     * Setter for searchCriteriaExactSignalingAddressType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSignalingAddressType $searchCriteriaExactSignalingAddressType
     * @return $this
     */
    public function setSearchCriteriaExactSignalingAddressType(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSignalingAddressType $searchCriteriaExactSignalingAddressType)
    {
        $this->searchCriteriaExactSignalingAddressType = $searchCriteriaExactSignalingAddressType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactSignalingAddressType()
    {
        $this->searchCriteriaExactSignalingAddressType = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaResellerId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    public function getSearchCriteriaResellerId()
    {
        return $this->searchCriteriaResellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaResellerId;
    }

    /**
     * Setter for searchCriteriaResellerId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[] $searchCriteriaResellerId
     * @return $this
     */
    public function setSearchCriteriaResellerId(array $searchCriteriaResellerId)
    {
        $this->searchCriteriaResellerId = $searchCriteriaResellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaResellerId()
    {
        $this->searchCriteriaResellerId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaResellerId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId $searchCriteriaResellerId
     * @return $this
     */
    public function addSearchCriteriaResellerId($searchCriteriaResellerId)
    {
        $this->searchCriteriaResellerId[] = $searchCriteriaResellerId;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceConfigurationOptions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceTypeConfigurationOptionType[]
     */
    public function getSearchCriteriaDeviceConfigurationOptions()
    {
        return $this->searchCriteriaDeviceConfigurationOptions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDeviceConfigurationOptions;
    }

    /**
     * Setter for searchCriteriaDeviceConfigurationOptions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceTypeConfigurationOptionType[] $searchCriteriaDeviceConfigurationOptions
     * @return $this
     */
    public function setSearchCriteriaDeviceConfigurationOptions(array $searchCriteriaDeviceConfigurationOptions)
    {
        $this->searchCriteriaDeviceConfigurationOptions = $searchCriteriaDeviceConfigurationOptions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDeviceConfigurationOptions()
    {
        $this->searchCriteriaDeviceConfigurationOptions = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceConfigurationOptions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceTypeConfigurationOptionType $searchCriteriaDeviceConfigurationOptions
     * @return $this
     */
    public function addSearchCriteriaDeviceConfigurationOptions($searchCriteriaDeviceConfigurationOptions)
    {
        $this->searchCriteriaDeviceConfigurationOptions[] = $searchCriteriaDeviceConfigurationOptions;
        return $this;
    }

    /**
     * Getter for includeSystemLevel
     *
     * @return bool
     */
    public function getIncludeSystemLevel()
    {
        return $this->includeSystemLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeSystemLevel;
    }

    /**
     * Setter for includeSystemLevel
     *
     * @param bool $includeSystemLevel
     * @return $this
     */
    public function setIncludeSystemLevel($includeSystemLevel)
    {
        $this->includeSystemLevel = $includeSystemLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeSystemLevel()
    {
        $this->includeSystemLevel = null;
        return $this;
    }


}


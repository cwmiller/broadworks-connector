<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyGetListRequest
 *
 * Request to get the list of device family managed by the Device Management System. 
 *         If includeSystemLevel is specified, all system level device families and the reseller device families matching search criteria 
 *         are returned even when searchCriteriaResellerId is specified.        
 *         If reseller administrator sends the request, searchCriteriaResellerId is ignored and automatically set to the administrator's reseller. 
 *         
 *         The response is either SystemDeviceFamilyGetListResponse or ErrorResponse.
 *
 * @see SystemDeviceFamilyGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7563","type":"sequence"}]
 */
class SystemDeviceFamilyGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName includeSystemLevel
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:7563
     * @var bool|null
     */
    protected $includeSystemLevel = null;

    /**
     * @ElementName searchCriteriaResellerId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:7563
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    protected $searchCriteriaResellerId = [
        
    ];

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
}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneLocationBasedPhysicalLocationGetListRequest
 *
 * Gets a list of physical locations assigned to a zone.
 *         The response is either a SystemZoneLocationBasedPhysicalLocationGetListResponse or an ErrorResponse.
 *
 * @see SystemZoneLocationBasedPhysicalLocationGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:20060","type":"sequence"}]
 */
class SystemZoneLocationBasedPhysicalLocationGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName zoneName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:20060
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $zoneName = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:20060
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaPhysicalLocation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPhysicalLocation
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:20060
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPhysicalLocation[]
     */
    protected $searchCriteriaPhysicalLocation = [
        
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
     * Getter for searchCriteriaPhysicalLocation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPhysicalLocation[]
     */
    public function getSearchCriteriaPhysicalLocation()
    {
        return $this->searchCriteriaPhysicalLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaPhysicalLocation;
    }

    /**
     * Setter for searchCriteriaPhysicalLocation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPhysicalLocation[] $searchCriteriaPhysicalLocation
     * @return $this
     */
    public function setSearchCriteriaPhysicalLocation(array $searchCriteriaPhysicalLocation)
    {
        $this->searchCriteriaPhysicalLocation = $searchCriteriaPhysicalLocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaPhysicalLocation()
    {
        $this->searchCriteriaPhysicalLocation = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaPhysicalLocation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPhysicalLocation $searchCriteriaPhysicalLocation
     * @return $this
     */
    public function addSearchCriteriaPhysicalLocation($searchCriteriaPhysicalLocation)
    {
        $this->searchCriteriaPhysicalLocation[] = $searchCriteriaPhysicalLocation;
        return $this;
    }
}


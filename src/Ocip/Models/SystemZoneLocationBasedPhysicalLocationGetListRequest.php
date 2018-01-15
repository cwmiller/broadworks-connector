<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneLocationBasedPhysicalLocationGetListRequest
 *
 * Gets a list of physical locations assigned to a zone.
 *         Response is SystemZoneLocationBasedPhysicalLocationGetListResponse or an
 * ErrorResponse.
 */
class SystemZoneLocationBasedPhysicalLocationGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName searchCriteriaPhysicalLocation
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPhysicalLocation[]
     */
    private $searchCriteriaPhysicalLocation = array(
        
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
     * Getter for searchCriteriaPhysicalLocation
     *
     * @ElementName searchCriteriaPhysicalLocation
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPhysicalLocation[]
     */
    public function getSearchCriteriaPhysicalLocation()
    {
        return $this->searchCriteriaPhysicalLocation;
    }

    /**
     * Setter for searchCriteriaPhysicalLocation
     *
     * @ElementName searchCriteriaPhysicalLocation
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPhysicalLocation[] $searchCriteriaPhysicalLocation
     * @return $this
     */
    public function setSearchCriteriaPhysicalLocation($searchCriteriaPhysicalLocation)
    {
        $this->searchCriteriaPhysicalLocation = $searchCriteriaPhysicalLocation;
        return $this;
    }

    /**
     * Adder for searchCriteriaPhysicalLocation
     *
     * @ElementName searchCriteriaPhysicalLocation
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPhysicalLocation $searchCriteriaPhysicalLocation
     * @return $this
     */
    public function addSearchCriteriaPhysicalLocation($searchCriteriaPhysicalLocation)
    {
        $this->searchCriteriaPhysicalLocation []= $searchCriteriaPhysicalLocation;
        return $this;
    }


}


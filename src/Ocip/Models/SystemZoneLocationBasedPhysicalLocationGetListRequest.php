<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneLocationBasedPhysicalLocationGetListRequest
 *
 * Gets a list of physical locations assigned to a zone.
 *         The response is SystemZoneLocationBasedPhysicalLocationGetListResponse or an ErrorResponse.
 *
 * @see SystemZoneLocationBasedPhysicalLocationGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18352","type":"sequence"}]
 */
class SystemZoneLocationBasedPhysicalLocationGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18352
     * @var string|null
     */
    private $zoneName = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18352
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaPhysicalLocation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPhysicalLocation
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18352
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPhysicalLocation[]
     */
    private $searchCriteriaPhysicalLocation = array(
        
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


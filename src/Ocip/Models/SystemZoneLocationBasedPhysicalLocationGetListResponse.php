<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneLocationBasedPhysicalLocationGetListResponse
 *
 * Response to SystemZoneLocationBasedPhysicalLocationGetListRequest.
 *
 * @see SystemZoneLocationBasedPhysicalLocationGetListRequest
 */
class SystemZoneLocationBasedPhysicalLocationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName physicalLocation
     * @var string[]
     */
    private $physicalLocation = array(
        
    );

    /**
     * Getter for physicalLocation
     *
     * @ElementName physicalLocation
     * @return string[]
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @ElementName physicalLocation
     * @param string[] $physicalLocation
     * @return $this
     */
    public function setPhysicalLocation(array $physicalLocation)
    {
        $this->physicalLocation = $physicalLocation;
        return $this;
    }

    /**
     * Adder for physicalLocation
     *
     * @ElementName physicalLocation
     * @param string $physicalLocation
     * @return $this
     */
    public function addPhysicalLocation(string $physicalLocation)
    {
        $this->physicalLocation []= $physicalLocation;
        return $this;
    }


}


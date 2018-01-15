<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneLocationBasedPhysicalLocationDeleteListRequest
 *
 * Deletes a list of physical addresses from a zone
 *         The response is SuccessResponse or an ErrorResponse.
 */
class SystemZoneLocationBasedPhysicalLocationDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @var string|null
     */
    private $zoneName = null;

    /**
     * @ElementName physicalLocation
     * @var string[]
     */
    private $physicalLocation = array(
        
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
    public function setPhysicalLocation($physicalLocation)
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
    public function addPhysicalLocation($physicalLocation)
    {
        $this->physicalLocation []= $physicalLocation;
        return $this;
    }


}


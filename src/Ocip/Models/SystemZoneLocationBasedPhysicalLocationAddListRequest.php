<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneLocationBasedPhysicalLocationAddListRequest
 *
 * Adds a list of physical locations to a zone
 *         The response is SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemZoneLocationBasedPhysicalLocationAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @Type string
     * @var string|null
     */
    private $zoneName = null;

    /**
     * @ElementName physicalLocation
     * @Type string
     * @Array
     * @var string[]
     */
    private $physicalLocation = array(
        
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
     * Getter for physicalLocation
     *
     * @return string[]
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @param string[] $physicalLocation
     * @return $this
     */
    public function setPhysicalLocation(array $physicalLocation)
    {
        $this->physicalLocation = $physicalLocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhysicalLocation()
    {
        $this->physicalLocation = null;
        return $this;
    }

    /**
     * Adder for physicalLocation
     *
     * @param string $physicalLocation
     * @return $this
     */
    public function addPhysicalLocation(string $physicalLocation)
    {
        $this->physicalLocation[] = $physicalLocation;
        return $this;
    }


}


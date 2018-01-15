<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingRestrictionsZoneAddRequest
 *
 * Add a zone.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced by: SystemZoneAddRequest
 */
class SystemZoneCallingRestrictionsZoneAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @var string|null
     */
    private $zoneName = null;

    /**
     * @ElementName physicalLocation
     * @var string|null
     */
    private $physicalLocation = null;

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
     * @return string|null
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @ElementName physicalLocation
     * @param string|null $physicalLocation
     * @return $this
     */
    public function setPhysicalLocation($physicalLocation)
    {
        $this->physicalLocation = $physicalLocation;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingRestrictionsZoneAddRequest
 *
 * Add a zone.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *                 Replaced by: SystemZoneAddRequest
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemZoneAddRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:16679","type":"sequence"}]
 */
class SystemZoneCallingRestrictionsZoneAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16679
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $zoneName = null;

    /**
     * @ElementName physicalLocation
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16679
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    private $physicalLocation = null;

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
     * @return string
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @param string $physicalLocation
     * @return $this
     */
    public function setPhysicalLocation($physicalLocation)
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


}


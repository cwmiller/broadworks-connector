<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingRestrictionsZoneModifyRequest
 *
 * Modifies attributes of a zone in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced by: SystemZonePhysicalLocationAddListRequest and
 *         SystemZonePhysicalLocationDeleteListRequest
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemZonePhysicalLocationAddListRequest
 * @see SystemZonePhysicalLocationDeleteListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:40027","type":"sequence"}]
 */
class SystemZoneCallingRestrictionsZoneModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName zoneName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:40027
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $zoneName = null;

    /**
     * @ElementName physicalLocation
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:40027
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $physicalLocation = null;

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
     * @return string|null
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @param string|null $physicalLocation
     * @return $this
     */
    public function setPhysicalLocation($physicalLocation = null)
    {
        if ($physicalLocation === null) {
            $this->physicalLocation = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->physicalLocation = $physicalLocation;
        }
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingZonePhysicalLocationGetRequest
 *
 * Returns a zone calling physical location for a given zone.
 * 	     Response is SystemZoneCallingZonePhysicalLocationGetResponse or an
 * ErrorResponse.
 *
 * @see SystemZoneCallingZonePhysicalLocationGetResponse
 * @see ErrorResponse
 */
class SystemZoneCallingZonePhysicalLocationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @Type string
     * @var string|null
     */
    private $zoneName = null;

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


}


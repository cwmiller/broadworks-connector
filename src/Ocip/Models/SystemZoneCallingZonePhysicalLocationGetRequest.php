<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingZonePhysicalLocationGetRequest
 *
 * Returns a zone calling physical location for a given zone.
 * 	     Response is SystemZoneCallingZonePhysicalLocationGetResponse or an
 * ErrorResponse.
 */
class SystemZoneCallingZonePhysicalLocationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @var string|null
     */
    private $zoneName = null;

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


}


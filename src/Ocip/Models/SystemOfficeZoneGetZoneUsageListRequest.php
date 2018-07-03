<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetZoneUsageListRequest
 *
 * Get the list of Office Zones that contain a specific
 *         Zone.
 *         The response is either a SystemOfficeZoneGetZoneUsageListResponse
 *         or an ErrorResponse.
 *
 * @see SystemOfficeZoneGetZoneUsageListResponse
 * @see ErrorResponse
 */
class SystemOfficeZoneGetZoneUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


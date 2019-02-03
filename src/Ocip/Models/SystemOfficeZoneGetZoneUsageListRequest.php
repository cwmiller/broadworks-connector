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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12908","type":"sequence"}]
 */
class SystemOfficeZoneGetZoneUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12908
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


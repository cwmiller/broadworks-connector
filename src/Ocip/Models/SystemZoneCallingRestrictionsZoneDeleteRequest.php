<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingRestrictionsZoneDeleteRequest
 *
 * Deletes a zone from the system
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced by: SystemZoneDeleteRequest
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemZoneDeleteRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:39977","type":"sequence"}]
 */
class SystemZoneCallingRestrictionsZoneDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName zoneName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:39977
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $zoneName = null;

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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingZonePhysicalLocationGetRequest
 *
 * The response is either a SystemZoneCallingZonePhysicalLocationGetResponse or an ErrorResponse.
 *         Returns a zone calling physical location for a given zone.
 *
 * @see SystemZoneCallingZonePhysicalLocationGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19933","type":"sequence"}]
 */
class SystemZoneCallingZonePhysicalLocationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName zoneName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:19933
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


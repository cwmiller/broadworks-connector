<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingZonePhysicalLocationGetResponse
 *
 * Response to SystemZoneCallingZonePhysicalLocationGetRequest.
 *
 * @see SystemZoneCallingZonePhysicalLocationGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19948","type":"sequence"}]
 */
class SystemZoneCallingZonePhysicalLocationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName physicalLocation
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:19948
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    protected $physicalLocation = null;

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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingZonePhysicalLocationGetResponse
 *
 * Response to SystemZoneCallingZonePhysicalLocationGetRequest.
 *
 * @see SystemZoneCallingZonePhysicalLocationGetRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:17085","type":"sequence"}]
 */
class SystemZoneCallingZonePhysicalLocationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName physicalLocation
     * @Type string
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:17085
     * @var string|null
     */
    private $physicalLocation = null;

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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneLocationBasedPhysicalLocationGetListResponse
 *
 * Response to SystemZoneLocationBasedPhysicalLocationGetListRequest.
 *
 * @see SystemZoneLocationBasedPhysicalLocationGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:20077","type":"sequence"}]
 */
class SystemZoneLocationBasedPhysicalLocationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName physicalLocation
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:20077
     * @MinLength 1
     * @MaxLength 1024
     * @var string[]
     */
    protected $physicalLocation = [
        
    ];

    /**
     * Getter for physicalLocation
     *
     * @return string[]
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @param string[] $physicalLocation
     * @return $this
     */
    public function setPhysicalLocation(array $physicalLocation)
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

    /**
     * Adder for physicalLocation
     *
     * @param string $physicalLocation
     * @return $this
     */
    public function addPhysicalLocation(string $physicalLocation)
    {
        $this->physicalLocation[] = $physicalLocation;
        return $this;
    }
}


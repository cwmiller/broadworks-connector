<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneLocationBasedPhysicalLocationGetListResponse
 *
 * Response to SystemZoneLocationBasedPhysicalLocationGetListRequest.
 *
 * @see SystemZoneLocationBasedPhysicalLocationGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19756","type":"sequence"}]
 */
class SystemZoneLocationBasedPhysicalLocationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName physicalLocation
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19756
     * @MinLength 1
     * @MaxLength 1024
     * @var string[]
     */
    protected $physicalLocation = array(
        
    );

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


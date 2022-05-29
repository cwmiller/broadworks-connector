<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementZoneList
 *
 * Contains an ordered list of zones to use to replace the current list of zones in an Office Zone.
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:20044","type":"sequence"}]
 */
class ReplacementZoneList
{

    /**
     * @ElementName zoneName
     * @Type string
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:20044
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $zoneName = array(
        
    );

    /**
     * Getter for zoneName
     *
     * @return string[]
     */
    public function getZoneName()
    {
        return $this->zoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->zoneName;
    }

    /**
     * Setter for zoneName
     *
     * @param string[] $zoneName
     * @return $this
     */
    public function setZoneName(array $zoneName)
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

    /**
     * Adder for zoneName
     *
     * @param string $zoneName
     * @return $this
     */
    public function addZoneName(string $zoneName)
    {
        $this->zoneName[] = $zoneName;
        return $this;
    }


}


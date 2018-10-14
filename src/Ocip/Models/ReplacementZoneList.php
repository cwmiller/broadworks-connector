<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementZoneList
 *
 * Contains an ordered list of zones to use to replace the current list of zones in
 * an Office Zone.
 */
class ReplacementZoneList
{

    /**
     * @ElementName zoneName
     * @var string[]
     */
    private $zoneName = array(
        
    );

    /**
     * Getter for zoneName
     *
     * @ElementName zoneName
     * @return string[]
     */
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * Setter for zoneName
     *
     * @ElementName zoneName
     * @param string[] $zoneName
     * @return $this
     */
    public function setZoneName(array $zoneName)
    {
        $this->zoneName = $zoneName;
        return $this;
    }

    /**
     * Adder for zoneName
     *
     * @ElementName zoneName
     * @param string $zoneName
     * @return $this
     */
    public function addZoneName(string $zoneName)
    {
        $this->zoneName []= $zoneName;
        return $this;
    }


}


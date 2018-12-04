<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementZoneList
 *
 * Contains an ordered list of zones to use to replace the current list of zones in an Office Zone.
 *
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:17502","type":"sequence"}]
 */
class ReplacementZoneList
{

    /**
     * @ElementName zoneName
     * @Type string
     * @Array
     * @Group 610f84d3e188f0477c3ae1a82ee036da:17502
     * @var string[]
     */
    private $zoneName = array(
        
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


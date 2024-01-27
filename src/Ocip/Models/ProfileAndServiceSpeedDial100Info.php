<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceSpeedDial100Info
 *
 * This is the configuration parameters for Speed Dial 100 service
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4566","type":"sequence"}]
 */
class ProfileAndServiceSpeedDial100Info
{
    /**
     * @ElementName prefix
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4566
     * @MinLength 1
     * @MaxLength 2
     * @var string|null
     */
    protected $prefix = null;

    /**
     * @ElementName speedDialEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SpeedDial100Entry
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4566
     * @var \CWM\BroadWorksConnector\Ocip\Models\SpeedDial100Entry[]
     */
    protected $speedDialEntry = [
        
    ];

    /**
     * Getter for prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefix()
    {
        $this->prefix = null;
        return $this;
    }

    /**
     * Getter for speedDialEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SpeedDial100Entry[]
     */
    public function getSpeedDialEntry()
    {
        return $this->speedDialEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->speedDialEntry;
    }

    /**
     * Setter for speedDialEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SpeedDial100Entry[] $speedDialEntry
     * @return $this
     */
    public function setSpeedDialEntry(array $speedDialEntry)
    {
        $this->speedDialEntry = $speedDialEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSpeedDialEntry()
    {
        $this->speedDialEntry = null;
        return $this;
    }

    /**
     * Adder for speedDialEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SpeedDial100Entry $speedDialEntry
     * @return $this
     */
    public function addSpeedDialEntry($speedDialEntry)
    {
        $this->speedDialEntry[] = $speedDialEntry;
        return $this;
    }
}


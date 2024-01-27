<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceSpeedDial8Info
 *
 * This is the configuration parameters for Speed Dial 8 service
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4578","type":"sequence"}]
 */
class ProfileAndServiceSpeedDial8Info
{
    /**
     * @ElementName speedDialEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SpeedDial8Entry
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4578
     * @var \CWM\BroadWorksConnector\Ocip\Models\SpeedDial8Entry[]
     */
    protected $speedDialEntry = [
        
    ];

    /**
     * Getter for speedDialEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SpeedDial8Entry[]
     */
    public function getSpeedDialEntry()
    {
        return $this->speedDialEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->speedDialEntry;
    }

    /**
     * Setter for speedDialEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SpeedDial8Entry[] $speedDialEntry
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SpeedDial8Entry $speedDialEntry
     * @return $this
     */
    public function addSpeedDialEntry($speedDialEntry)
    {
        $this->speedDialEntry[] = $speedDialEntry;
        return $this;
    }
}


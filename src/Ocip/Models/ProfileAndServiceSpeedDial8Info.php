<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceSpeedDial8Info
 *
 * This is the configuration parameters for Speed Dial 8 service
 */
class ProfileAndServiceSpeedDial8Info
{

    /**
     * @ElementName speedDialEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\SpeedDial8Entry[]
     */
    private $speedDialEntry = array(
        
    );

    /**
     * Getter for speedDialEntry
     *
     * @ElementName speedDialEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\SpeedDial8Entry[]
     */
    public function getSpeedDialEntry()
    {
        return $this->speedDialEntry;
    }

    /**
     * Setter for speedDialEntry
     *
     * @ElementName speedDialEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\SpeedDial8Entry[] $speedDialEntry
     * @return $this
     */
    public function setSpeedDialEntry(array $speedDialEntry)
    {
        $this->speedDialEntry = $speedDialEntry;
        return $this;
    }

    /**
     * Adder for speedDialEntry
     *
     * @ElementName speedDialEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\SpeedDial8Entry $speedDialEntry
     * @return $this
     */
    public function addSpeedDialEntry($speedDialEntry)
    {
        $this->speedDialEntry []= $speedDialEntry;
        return $this;
    }


}


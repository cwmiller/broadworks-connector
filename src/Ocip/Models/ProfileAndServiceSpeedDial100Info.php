<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceSpeedDial100Info
 *
 * This is the configuration parameters for Speed Dial 100 service
 */
class ProfileAndServiceSpeedDial100Info
{

    /**
     * @ElementName prefix
     * @var string|null
     */
    private $prefix = null;

    /**
     * @ElementName speedDialEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\SpeedDial100Entry[]
     */
    private $speedDialEntry = array(
        
    );

    /**
     * Getter for prefix
     *
     * @ElementName prefix
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @ElementName prefix
     * @param string|null $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Getter for speedDialEntry
     *
     * @ElementName speedDialEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\SpeedDial100Entry[]
     */
    public function getSpeedDialEntry()
    {
        return $this->speedDialEntry;
    }

    /**
     * Setter for speedDialEntry
     *
     * @ElementName speedDialEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\SpeedDial100Entry[] $speedDialEntry
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SpeedDial100Entry $speedDialEntry
     * @return $this
     */
    public function addSpeedDialEntry($speedDialEntry)
    {
        $this->speedDialEntry []= $speedDialEntry;
        return $this;
    }


}


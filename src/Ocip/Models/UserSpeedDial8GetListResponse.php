<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSpeedDial8GetListResponse
 *
 * Response to the UserSpeedDial8GetListRequest.
 *
 * @see UserSpeedDial8GetListRequest
 * @Groups [{"id":"cf382feccaa0287c41bdaf00086b6ffd:56","type":"sequence"}]
 */
class UserSpeedDial8GetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName speedDialEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SpeedDial8Entry
     * @Array
     * @Group cf382feccaa0287c41bdaf00086b6ffd:56
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


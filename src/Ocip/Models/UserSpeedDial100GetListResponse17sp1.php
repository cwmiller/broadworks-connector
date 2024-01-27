<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSpeedDial100GetListResponse17sp1
 *
 * Response to the UserSpeedDial100GetListRequest17sp1.
 *
 * @see UserSpeedDial100GetListRequest17sp1
 * @Groups [{"id":"e084de202cf726c3202fca43390f9ec5:192","type":"sequence"}]
 */
class UserSpeedDial100GetListResponse17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName prefix
     * @Type string
     * @Optional
     * @Group e084de202cf726c3202fca43390f9ec5:192
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
     * @Group e084de202cf726c3202fca43390f9ec5:192
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


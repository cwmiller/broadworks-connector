<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSpeedDial100GetListResponse
 *
 * Response to the UserSpeedDial100GetListRequest.
 *         
 *         Replaced by: UserSpeedDial100GetListResponse17Sp1
 *
 * @see UserSpeedDial100GetListRequest
 * @see UserSpeedDial100GetListResponse17Sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47525","type":"sequence"}]
 */
class UserSpeedDial100GetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName prefix
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:47525
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
     * @Group d8f04177e438f303b41c211e518706bf:47525
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


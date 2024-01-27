<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSpeedDial8ModifyListRequest
 *
 * Modify the speed dial 8 settings for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"cf382feccaa0287c41bdaf00086b6ffd:73","type":"sequence"}]
 */
class UserSpeedDial8ModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group cf382feccaa0287c41bdaf00086b6ffd:73
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName speedDialEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SpeedDial8Entry
     * @Array
     * @Optional
     * @Group cf382feccaa0287c41bdaf00086b6ffd:73
     * @var \CWM\BroadWorksConnector\Ocip\Models\SpeedDial8Entry[]
     */
    protected $speedDialEntry = [
        
    ];

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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


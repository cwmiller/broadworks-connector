<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSpeedDial100AddListRequest
 *
 * Add one or more speed dial 100 settings for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserSpeedDial100AddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName speedDialEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\SpeedDial100Entry[]
     */
    private $speedDialEntry = array(
        
    );

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSpeedDial100GetListRequest
 *
 * Get the speed dial 100 settings for a user.
 *         The response is either a UserSpeedDial100GetListResponse or an ErrorResponse.
 *         
 *         Replaced by: UserSpeedDial100GetListRequest17Sp1
 *
 * @see UserSpeedDial100GetListResponse
 * @see ErrorResponse
 * @see UserSpeedDial100GetListRequest17Sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:23101","type":"sequence"}]
 */
class UserSpeedDial100GetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23101
     * @var string|null
     */
    private $userId = null;

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


}


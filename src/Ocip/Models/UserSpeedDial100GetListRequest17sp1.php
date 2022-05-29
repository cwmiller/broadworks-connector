<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSpeedDial100GetListRequest17sp1
 *
 * Get the speed dial 100 settings for a user.
 *         The response is either a UserSpeedDial100GetListResponse17sp1 or an ErrorResponse.
 *
 * @see UserSpeedDial100GetListResponse17sp1
 * @see ErrorResponse
 * @Groups [{"id":"066a3d16bce438447d23cbe6ff0885a6:177","type":"sequence"}]
 */
class UserSpeedDial100GetListRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 066a3d16bce438447d23cbe6ff0885a6:177
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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


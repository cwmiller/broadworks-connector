<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSpeedDial100GetListRequest17sp1
 *
 * Get the speed dial 100 settings for a user.
 *         The response is either a UserSpeedDial100GetListResponse17sp1 or an
 * ErrorResponse.
 */
class UserSpeedDial100GetListRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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


}


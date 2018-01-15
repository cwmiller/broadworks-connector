<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSpeedDial8GetListRequest
 *
 * Get the speed dial 8 settings for a user.
 *         The response is either a UserSpeedDial8GetListResponse or an
 * ErrorResponse.
 */
class UserSpeedDial8GetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


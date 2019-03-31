<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSpeedDial8GetListRequest
 *
 * Get the speed dial 8 settings for a user.
 *         The response is either a UserSpeedDial8GetListResponse or an ErrorResponse.
 *
 * @see UserSpeedDial8GetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"00c269203c804a240d213a69b1264795:41","type":"sequence"}]
 */
class UserSpeedDial8GetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 00c269203c804a240d213a69b1264795:41
     * @MinLength 1
     * @MaxLength 161
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetListRequest
 *
 * Get the list of call centers the specified user belongs to.
 *         The response is either a UserCallCenterGetListResponse or an
 * ErrorResponse.
 *         Replaced By: UserCallCenterGetRequest
 *
 * @see UserCallCenterGetListResponse
 * @see ErrorResponse
 * @see UserCallCenterGetRequest
 */
class UserCallCenterGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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


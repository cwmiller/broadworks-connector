<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetRequest19
 *
 * Get the user's call center settings and the list of call centers the specified
 * user belongs to.
 *         The response is either a UserCallCenterGetResponse19 or an
 * ErrorResponse.
 */
class UserCallCenterGetRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


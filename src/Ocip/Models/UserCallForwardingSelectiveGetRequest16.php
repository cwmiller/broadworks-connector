<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingSelectiveGetRequest16
 *
 * Get the user's call forwarding selective service setting.
 *         The response is either a UserCallForwardingSelectiveGetResponse16 or an
 * ErrorResponse.
 */
class UserCallForwardingSelectiveGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


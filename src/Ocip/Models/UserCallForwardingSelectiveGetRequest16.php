<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingSelectiveGetRequest16
 *
 * Get the user's call forwarding selective service setting.
 *         The response is either a UserCallForwardingSelectiveGetResponse16 or an ErrorResponse.
 *
 * @see UserCallForwardingSelectiveGetResponse16
 * @see ErrorResponse
 * @Groups [{"id":"f1072a3da53dcabbd043a43a74c5d05f:128","type":"sequence"}]
 */
class UserCallForwardingSelectiveGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f1072a3da53dcabbd043a43a74c5d05f:128
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


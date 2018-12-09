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
 * @Groups [{"id":"00144d4cd6b46fb2a87b2e4d8760f200:128","type":"sequence"}]
 */
class UserCallForwardingSelectiveGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 00144d4cd6b46fb2a87b2e4d8760f200:128
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


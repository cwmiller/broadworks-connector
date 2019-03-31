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
 * @Groups [{"id":"543304bb75006bfa60814c897fa03ec0:128","type":"sequence"}]
 */
class UserCallForwardingSelectiveGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 543304bb75006bfa60814c897fa03ec0:128
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


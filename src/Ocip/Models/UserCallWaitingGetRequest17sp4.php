<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallWaitingGetRequest17sp4
 *
 * Request the user level data associated with Call Waiting.
 *         The response is either a UserCallWaitingGetResponse17sp4 or an
 *         ErrorResponse.
 */
class UserCallWaitingGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallWaitingGetRequest
 *
 * Request the user level data associated with Call Waiting.
 *         The response is either a UserCallWaitingGetResponse or an
 *         ErrorResponse.
 *         Replaced by: UserCallWaitingGetRequest17sp4
 *
 * @see UserCallWaitingGetResponse
 * @see ErrorResponse
 * @see UserCallWaitingGetRequest17sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:41805","type":"sequence"}]
 */
class UserCallWaitingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:41805
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


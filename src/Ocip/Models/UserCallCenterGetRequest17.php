<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetRequest17
 *
 * Get the user's call center settings and the list of call centers the specified user belongs to.
 *                 The response is either a UserCallCenterGetResponse17 or an ErrorResponse.
 *
 *                 Replaced by UserCallCenterGetRequest17sp4.
 *
 * @see UserCallCenterGetResponse17
 * @see ErrorResponse
 * @see UserCallCenterGetRequest17sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:28715","type":"sequence"}]
 */
class UserCallCenterGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28715
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


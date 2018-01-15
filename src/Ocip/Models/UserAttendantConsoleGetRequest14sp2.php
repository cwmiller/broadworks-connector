<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAttendantConsoleGetRequest14sp2
 *
 * Request user's attendant console settings.
 *         The response is either a UserAttendantConsoleGetResponse14sp2 or an
 * ErrorResponse.
 */
class UserAttendantConsoleGetRequest14sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


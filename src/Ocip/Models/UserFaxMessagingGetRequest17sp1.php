<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFaxMessagingGetRequest17sp1
 *
 * Request the user level data associated with Fax Messaging.
 *         The response is either a UserFaxMessagingGetResponse17sp1 or an
 * ErrorResponse.
 */
class UserFaxMessagingGetRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


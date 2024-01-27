<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFaxMessagingGetRequest17sp1
 *
 * Request the user level data associated with Fax Messaging.
 *         The response is either a UserFaxMessagingGetResponse17sp1 or an ErrorResponse.
 *
 * @see UserFaxMessagingGetResponse17sp1
 * @see ErrorResponse
 * @Groups [{"id":"b2249333b9e085ee149c29960c00214e:99","type":"sequence"}]
 */
class UserFaxMessagingGetRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group b2249333b9e085ee149c29960c00214e:99
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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


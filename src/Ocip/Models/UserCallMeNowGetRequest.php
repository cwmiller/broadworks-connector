<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowGetRequest
 *
 * Get the user's call me now service setting.
 *         The response is either a UserCallMeNowGetResponse or an ErrorResponse.
 *
 * @see UserCallMeNowGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"ddf57759ad9d63b4ce76f3f789cde156:167","type":"sequence"}]
 */
class UserCallMeNowGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ddf57759ad9d63b4ce76f3f789cde156:167
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


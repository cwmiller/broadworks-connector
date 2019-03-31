<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSilentAlertingGetRequest
 *
 * Request the user level data associated with Silent Alerting service.
 *         The response is either a UserSilentAlertingGetResponse or an
 *         ErrorResponse.
 *
 * @see UserSilentAlertingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"f2b3ec892c5d27b9eb241f1d4d0f94f9:42","type":"sequence"}]
 */
class UserSilentAlertingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f2b3ec892c5d27b9eb241f1d4d0f94f9:42
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


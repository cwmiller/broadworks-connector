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
 * @Groups [{"id":"4d9b5452a87dd4ae64ca1609d0e55e87:42","type":"sequence"}]
 */
class UserSilentAlertingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4d9b5452a87dd4ae64ca1609d0e55e87:42
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


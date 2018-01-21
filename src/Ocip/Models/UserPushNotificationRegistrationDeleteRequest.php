<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationRegistrationDeleteRequest
 *
 * Request to remove a push notification registration.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserPushNotificationRegistrationDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName registrationId
     * @var string|null
     */
    private $registrationId = null;

    /**
     * Getter for registrationId
     *
     * @ElementName registrationId
     * @return string|null
     */
    public function getRegistrationId()
    {
        return $this->registrationId;
    }

    /**
     * Setter for registrationId
     *
     * @ElementName registrationId
     * @param string|null $registrationId
     * @return $this
     */
    public function setRegistrationId($registrationId)
    {
        $this->registrationId = $registrationId;
        return $this;
    }


}


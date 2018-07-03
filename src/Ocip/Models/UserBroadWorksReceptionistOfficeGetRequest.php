<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistOfficeGetRequest
 *
 * Request the Receptionist Office parameters.
 *         The response is either a UserBroadWorksReceptionistOfficeGetResponse or
 * an ErrorResponse.
 *
 * @see UserBroadWorksReceptionistOfficeGetResponse
 * @see ErrorResponse
 */
class UserBroadWorksReceptionistOfficeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


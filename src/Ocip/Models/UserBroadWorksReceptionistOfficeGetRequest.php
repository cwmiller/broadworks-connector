<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistOfficeGetRequest
 *
 * Request the Receptionist Office parameters.
 *         The response is either a UserBroadWorksReceptionistOfficeGetResponse or an ErrorResponse.
 *
 * @see UserBroadWorksReceptionistOfficeGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"4085b673b5035cde8e8ce380d60d6aed:85","type":"sequence"}]
 */
class UserBroadWorksReceptionistOfficeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4085b673b5035cde8e8ce380d60d6aed:85
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


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
 * @Groups [{"id":"91327bdd60f4ee8651b3afa2eb6868ee:85","type":"sequence"}]
 */
class UserBroadWorksReceptionistOfficeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 91327bdd60f4ee8651b3afa2eb6868ee:85
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


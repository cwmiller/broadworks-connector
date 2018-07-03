<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPhysicalLocationGetRequest
 *
 * Request the user level data associated with Physical Location.
 *         The response is either a UserPhysicalLocationGetResponse or an
 * ErrorResponse.
 *
 * @see UserPhysicalLocationGetResponse
 * @see ErrorResponse
 */
class UserPhysicalLocationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


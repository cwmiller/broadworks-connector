<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetFilteringRequest
 *
 * Get the filtering setting and the list of filtering criteria defined for an
 * executive user.
 *         Both executive and the executive assistant can run this command.
 *         The response is either UserExecutiveGetFilteringResponse or
 * ErrorResponse.
 *
 * @see UserExecutiveGetFilteringResponse
 * @see ErrorResponse
 */
class UserExecutiveGetFilteringRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


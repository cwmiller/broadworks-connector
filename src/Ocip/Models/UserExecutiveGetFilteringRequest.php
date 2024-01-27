<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetFilteringRequest
 *
 * Get the filtering setting and the list of filtering criteria defined for an executive user.
 *         Both executive and the executive assistant can run this command.
 *         The response is either UserExecutiveGetFilteringResponse or ErrorResponse.
 *
 * @see UserExecutiveGetFilteringResponse
 * @see ErrorResponse
 * @Groups [{"id":"3a54ac906cb7002cc1a30fbb0efadb0a:223","type":"sequence"}]
 */
class UserExecutiveGetFilteringRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:223
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


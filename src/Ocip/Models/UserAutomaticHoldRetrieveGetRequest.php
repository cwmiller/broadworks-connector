<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAutomaticHoldRetrieveGetRequest
 *
 * Request the user level data associated with Automatic Hold/Retrieve.
 *         The response is either a UserAutomaticHoldRetrieveGetResponse or an
 *         ErrorResponse.
 *
 * @see UserAutomaticHoldRetrieveGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"7e6893393b21480206131a5d901c0eef:44","type":"sequence"}]
 */
class UserAutomaticHoldRetrieveGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 7e6893393b21480206131a5d901c0eef:44
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


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
 * @Groups [{"id":"83fee6d8bc1cbca3d5ef05a88de706cf:44","type":"sequence"}]
 */
class UserAutomaticHoldRetrieveGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 83fee6d8bc1cbca3d5ef05a88de706cf:44
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


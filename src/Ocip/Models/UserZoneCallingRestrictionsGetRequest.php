<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserZoneCallingRestrictionsGetRequest
 *
 * Gets the home zone for a user
 *         The response is either a UserZoneCallingRestrictionsGetResponse or an ErrorResponse.
 *
 * @see UserZoneCallingRestrictionsGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"1d57523802a1435faa76c4035da1e4dc:100","type":"sequence"}]
 */
class UserZoneCallingRestrictionsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 1d57523802a1435faa76c4035da1e4dc:100
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


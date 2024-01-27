<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetRequest17
 *
 * Get the user's simultaneous ring family service setting.
 *         The response is either a UserSimultaneousRingFamilyGetResponse17 or an ErrorResponse.
 *
 * @see UserSimultaneousRingFamilyGetResponse17
 * @see ErrorResponse
 * @Groups [{"id":"7829cd70c5c6e02768e0a59a5de29efe:120","type":"sequence"}]
 */
class UserSimultaneousRingFamilyGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 7829cd70c5c6e02768e0a59a5de29efe:120
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


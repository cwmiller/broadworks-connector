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
 * @Groups [{"id":"717a9f842e0bacab397cbe717881a5e7:100","type":"sequence"}]
 */
class UserZoneCallingRestrictionsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 717a9f842e0bacab397cbe717881a5e7:100
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


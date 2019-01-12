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
 * @Groups [{"id":"da5cd0d79ddb505982e08d164e405660:100","type":"sequence"}]
 */
class UserZoneCallingRestrictionsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group da5cd0d79ddb505982e08d164e405660:100
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


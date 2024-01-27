<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRoutePointSupervisorGetListRequest
 *
 * Get a list of Route Point supervisors assigned to a user.
 *         The response is either a UserRoutePointSupervisorGetListResponse or an ErrorResponse.
 *
 * @see UserRoutePointSupervisorGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e474d11df9a1d1d1041e589793e40de8:1253","type":"sequence"}]
 */
class UserRoutePointSupervisorGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group e474d11df9a1d1d1041e589793e40de8:1253
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


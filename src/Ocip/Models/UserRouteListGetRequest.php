<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRouteListGetRequest
 *
 * Get the route list setting and the list of number ranges assigned to a user.
 *         The response is either UserRouteListGetResponse or ErrorResponse.
 *         
 *         Replaced by: UserRouteListGetRequest22
 *
 * @see UserRouteListGetResponse
 * @see ErrorResponse
 * @see UserRouteListGetRequest22
 */
class UserRouteListGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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


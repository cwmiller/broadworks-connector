<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRouteListGetRequest22
 *
 * Get the route list setting and the list of number ranges assigned to a user.
 *         The response is either UserRouteListGetResponse22 or ErrorResponse.
 *         
 *         Replaced by: UserRouteListGetRequest24
 *
 * @see UserRouteListGetResponse22
 * @see ErrorResponse
 * @see UserRouteListGetRequest24
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46576","type":"sequence"}]
 */
class UserRouteListGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:46576
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


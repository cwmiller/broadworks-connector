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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46558","type":"sequence"}]
 */
class UserRouteListGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:46558
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


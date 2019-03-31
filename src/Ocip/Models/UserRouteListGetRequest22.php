<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRouteListGetRequest22
 *
 * Get the route list setting and the list of number ranges assigned to a user.
 *         The response is either UserRouteListGetResponse22 or ErrorResponse.
 *
 * @see UserRouteListGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"3f28429898a57a7f7846d3877b22df9f:775","type":"sequence"}]
 */
class UserRouteListGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 3f28429898a57a7f7846d3877b22df9f:775
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


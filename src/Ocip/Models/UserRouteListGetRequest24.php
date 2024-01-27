<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRouteListGetRequest24
 *
 * Get the route list setting and the list of number ranges assigned to a user.
 *         The response is either UserRouteListGetResponse24 or ErrorResponse.
 *
 * @see UserRouteListGetResponse24
 * @see ErrorResponse
 * @Groups [{"id":"500f9871ed90b8ab3fbd262883ab503b:819","type":"sequence"}]
 */
class UserRouteListGetRequest24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 500f9871ed90b8ab3fbd262883ab503b:819
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


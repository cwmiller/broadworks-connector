<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest21sp1
 *
 * Request to get the user information.  The response is either UserGetResponse21sp1 or ErrorResponse.
 *         
 *         Replaced by UserGetRequest22
 *
 * @see UserGetResponse21sp1
 * @see ErrorResponse
 * @see UserGetRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:43490","type":"sequence"}]
 */
class UserGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43490
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


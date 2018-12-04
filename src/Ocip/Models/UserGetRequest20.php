<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest20
 *
 * Request to get the user information.  The response is either
 *         UserGetResponse20 or ErrorResponse.
 *         Replaced by: UserGetRequest21
 *
 * @see UserGetResponse20
 * @see ErrorResponse
 * @see UserGetRequest21
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:35076","type":"sequence"}]
 */
class UserGetRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:35076
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


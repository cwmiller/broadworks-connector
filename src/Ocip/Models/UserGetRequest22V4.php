<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest22V4
 *
 * Request to get the user information.  The response is either UserGetResponse22V4 or ErrorResponse.
 *         
 *         Replaced by: UserGetResponse22V5 in AS data mode
 *
 * @see UserGetResponse22V4
 * @see ErrorResponse
 * @see UserGetResponse22V5
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:7413","type":"sequence"}]
 */
class UserGetRequest22V4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:7413
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest22V6
 *
 * Request to get the user information.  The response is either UserGetResponse22V6 or ErrorResponse.
 *         
 *         Replaced by: UserGetRequest22V7
 *
 * @see UserGetResponse22V6
 * @see ErrorResponse
 * @see UserGetRequest22V7
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:13378","type":"sequence"}]
 */
class UserGetRequest22V6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:13378
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

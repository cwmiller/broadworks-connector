<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest21
 *
 * Request to get the user information.  The response is either 
 *         UserGetResponse21 or ErrorResponse.
 *         
 *         Replaced by UserGetRequest21sp1 in AS data mode
 *
 * @see UserGetResponse21
 * @see ErrorResponse
 * @see UserGetRequest21sp1
 */
class UserGetRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


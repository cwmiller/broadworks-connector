<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest22V2
 *
 * Request to get the user information.  The response is either 
 *         UserGetResponse22V2 or ErrorResponse.
 *     
 *     Replaced by UserGetRequest22V3
 *
 * @see UserGetResponse22V2
 * @see ErrorResponse
 * @see UserGetRequest22V3
 * @Groups [{"id":"e9727a9f98db3fe2db7ad08079031b73:1723","type":"sequence"}]
 */
class UserGetRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group e9727a9f98db3fe2db7ad08079031b73:1723
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


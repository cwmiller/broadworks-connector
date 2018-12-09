<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInterceptUserGetRequest16sp1
 *
 * Get the user's intercept user service settings.
 *         The response is either a UserInterceptUserGetResponse16sp1 or an ErrorResponse.
 *         
 *         Replaced by: UserInterceptUserGetRequest21sp1 in AS data mode
 *
 * @see UserInterceptUserGetResponse16sp1
 * @see ErrorResponse
 * @see UserInterceptUserGetRequest21sp1
 * @Groups [{"id":"bb12a3589ab4748963f28f7ac9310f70:5178","type":"sequence"}]
 */
class UserInterceptUserGetRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group bb12a3589ab4748963f28f7ac9310f70:5178
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInterceptUserGetRequest21sp1
 *
 * Get the user's intercept user service settings.
 *         The response is either a UserInterceptUserGetResponse21sp1 or an ErrorResponse.
 *
 * @see UserInterceptUserGetResponse21sp1
 * @see ErrorResponse
 * @Groups [{"id":"3783f30df600d0ca3ee6dab86707b98b:268","type":"sequence"}]
 */
class UserInterceptUserGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 3783f30df600d0ca3ee6dab86707b98b:268
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


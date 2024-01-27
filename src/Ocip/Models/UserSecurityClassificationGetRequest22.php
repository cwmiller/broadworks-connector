<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSecurityClassificationGetRequest22
 *
 * Get a user's Security Classifications configuration.
 *         The response is either UserSecurityClassificationGetResponse22 or ErrorResponse.
 *
 * @see UserSecurityClassificationGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"435c279b3e6710f4ada60ed66a93d278:312","type":"sequence"}]
 */
class UserSecurityClassificationGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 435c279b3e6710f4ada60ed66a93d278:312
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


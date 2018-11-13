<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSecurityClassificationGetRequest
 *
 * Get a user's Security Classifications configuration.
 *         The response is either UserSecurityClassificationGetResponse or
 * ErrorResponse.
 *         
 *         Replaced By: UserSecurityClassificationGetRequest22.
 *
 * @see UserSecurityClassificationGetResponse
 * @see ErrorResponse
 * @see UserSecurityClassificationGetRequest22
 */
class UserSecurityClassificationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


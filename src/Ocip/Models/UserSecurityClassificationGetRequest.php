<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSecurityClassificationGetRequest
 *
 * Get a user's Security Classifications configuration.
 *         The response is either UserSecurityClassificationGetResponse or
 * ErrorResponse.
 */
class UserSecurityClassificationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}


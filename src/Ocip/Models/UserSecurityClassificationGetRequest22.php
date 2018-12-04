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
 * @Groups [{"id":"b91fcb7aba1afd62c15b3e7e36708d08:312","type":"sequence"}]
 */
class UserSecurityClassificationGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group b91fcb7aba1afd62c15b3e7e36708d08:312
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


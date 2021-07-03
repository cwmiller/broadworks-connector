<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSecurityClassificationGetRequest
 *
 * Get a user's Security Classifications configuration.
 *         The response is either UserSecurityClassificationGetResponse or ErrorResponse.
 *         
 *         Replaced By: UserSecurityClassificationGetRequest22.
 *
 * @see UserSecurityClassificationGetResponse
 * @see ErrorResponse
 * @see UserSecurityClassificationGetRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:45789","type":"sequence"}]
 */
class UserSecurityClassificationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45789
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


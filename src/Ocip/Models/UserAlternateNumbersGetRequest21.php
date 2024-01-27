<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAlternateNumbersGetRequest21
 *
 * Request the user level data associated with alternate numbers.
 *         The response is either a UserAlternateNumbersGetResponse21 or an ErrorResponse.
 *
 * @see UserAlternateNumbersGetResponse21
 * @see ErrorResponse
 * @Groups [{"id":"dce0108e82341b4f327f72fe5a339f54:41","type":"sequence"}]
 */
class UserAlternateNumbersGetRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group dce0108e82341b4f327f72fe5a339f54:41
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


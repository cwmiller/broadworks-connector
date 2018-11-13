<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAlternateNumbersGetRequest17
 *
 * Request the user level data associated with Alternate Numbers.
 *         The response is either a UserAlternateNumbersGetResponse17 or an
 * ErrorResponse.
 *         
 *         Replaced by: UserAlternateNumbersGetRequest21 in AS data mode
 *
 * @see UserAlternateNumbersGetResponse17
 * @see ErrorResponse
 * @see UserAlternateNumbersGetRequest21
 */
class UserAlternateNumbersGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


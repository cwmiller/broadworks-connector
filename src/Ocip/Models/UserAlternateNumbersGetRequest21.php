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
 * @Groups [{"id":"4d9a2d163c8e6a717c02be34ed674848:41","type":"sequence"}]
 */
class UserAlternateNumbersGetRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4d9a2d163c8e6a717c02be34ed674848:41
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


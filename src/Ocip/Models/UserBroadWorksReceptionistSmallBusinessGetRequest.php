<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistSmallBusinessGetRequest
 *
 * Request the Receptionist Small Business parameters.
 *         The response is either a UserBroadWorksReceptionistSmallBusinessGetResponse or an ErrorResponse.
 *
 * @see UserBroadWorksReceptionistSmallBusinessGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"c9d445cc2023c0bbcc8118fdbfdbb447:88","type":"sequence"}]
 */
class UserBroadWorksReceptionistSmallBusinessGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group c9d445cc2023c0bbcc8118fdbfdbb447:88
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


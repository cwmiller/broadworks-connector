<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityGetRequest
 *
 * Get the user's broadworks mobility service settings.
 *         The response is either a UserBroadWorksMobilityGetResponse or an ErrorResponse.
 *
 * @see UserBroadWorksMobilityGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"9bff48d8661ff401ea11b6e32b924f02:197","type":"sequence"}]
 */
class UserBroadWorksMobilityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 9bff48d8661ff401ea11b6e32b924f02:197
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


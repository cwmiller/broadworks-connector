<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityGetRequest21
 *
 * Get the user's BroadWorks Mobility service settings.
 *         The response is either a UserBroadWorksMobilityGetResponse21 or an ErrorResponse.
 *
 * @see UserBroadWorksMobilityGetResponse21
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:40450","type":"sequence"}]
 */
class UserBroadWorksMobilityGetRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:40450
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExternalCustomRingbackGetRequest
 *
 * Request the user level data associated with External Custom Ringback.
 *         The response is either a UserExternalCustomRingbackGetResponse or an
 *         ErrorResponse.
 *
 * @see UserExternalCustomRingbackGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"2c9f194a3272e429f2e5215dd988b94a:101","type":"sequence"}]
 */
class UserExternalCustomRingbackGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 2c9f194a3272e429f2e5215dd988b94a:101
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


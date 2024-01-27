<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrivacyGetRequest
 *
 * Request the user level data associated with Privacy.
 *         The response is either a UserPrivacyGetResponse or an
 *         ErrorResponse.
 *
 * @see UserPrivacyGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46348","type":"sequence"}]
 */
class UserPrivacyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:46348
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


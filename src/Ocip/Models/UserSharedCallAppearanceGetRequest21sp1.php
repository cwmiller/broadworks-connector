<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceGetRequest21sp1
 *
 * Get the user's Shared Call Appearance service setting.
 *         The response is either a UserSharedCallAppearanceGetResponse21sp1 or an ErrorResponse.
 *
 * @see UserSharedCallAppearanceGetResponse21sp1
 * @see ErrorResponse
 * @Groups [{"id":"4e9808afa6161bba01df39d17a849c79:132","type":"sequence"}]
 */
class UserSharedCallAppearanceGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 4e9808afa6161bba01df39d17a849c79:132
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


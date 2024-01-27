<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceGetRequest14sp2
 *
 * Get the user's Shared Call Appearance service setting.
 *         The response is either a UserSharedCallAppearanceGetResponse14sp2 or an ErrorResponse.
 *
 * @see UserSharedCallAppearanceGetResponse14sp2
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47056","type":"sequence"}]
 */
class UserSharedCallAppearanceGetRequest14sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:47056
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


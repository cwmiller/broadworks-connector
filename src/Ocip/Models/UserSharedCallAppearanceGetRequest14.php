<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceGetRequest14
 *
 * Get the user's Shared Call Appearance service setting.
 *         The response is either a UserSharedCallAppearanceGetResponse14 or an
 * ErrorResponse.
 *         Replaced By: UserSharedCallAppearanceGetRequest14sp2
 */
class UserSharedCallAppearanceGetRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}


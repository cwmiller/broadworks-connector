<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceGetRequest16sp2
 *
 * Get the user's Shared Call Appearance service setting.
 *         The response is either a UserSharedCallAppearanceGetResponse16sp2 or an ErrorResponse.
 *         Replaced by: UserSharedCallAppearanceGetRequest21sp1.
 *
 * @see UserSharedCallAppearanceGetResponse16sp2
 * @see ErrorResponse
 * @see UserSharedCallAppearanceGetRequest21sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:7926","type":"sequence"}]
 */
class UserSharedCallAppearanceGetRequest16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:7926
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


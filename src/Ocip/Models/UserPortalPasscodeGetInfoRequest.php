<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPortalPasscodeGetInfoRequest
 *
 * Request the user's portal passcode information.
 *         The response is either a UserPortalPasscodeGetInfoResponse or an ErrorResponse.
 *
 * @see UserPortalPasscodeGetInfoResponse
 * @see ErrorResponse
 * @Groups [{"id":"489b2153267470be8e945bf6b778e0d0:2665","type":"sequence"}]
 */
class UserPortalPasscodeGetInfoRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 489b2153267470be8e945bf6b778e0d0:2665
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


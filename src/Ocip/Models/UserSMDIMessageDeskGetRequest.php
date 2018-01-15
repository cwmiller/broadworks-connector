<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSMDIMessageDeskGetRequest
 *
 * Get the user's SMDI Message Desk service personal setting.
 *         The response is either a UserSMDIMessageDeskGetResponse or an
 * ErrorResponse.
 */
class UserSMDIMessageDeskGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


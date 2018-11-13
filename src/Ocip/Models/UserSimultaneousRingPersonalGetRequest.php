<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingPersonalGetRequest
 *
 * Get the user's simultaneous ring service personal setting.
 *         The response is either a UserSimultaneousRingPersonalGetResponse or an
 * ErrorResponse.
 *         Replaced By: UserSimultaneousRingPersonalGetRequest14sp4
 *
 * @see UserSimultaneousRingPersonalGetResponse
 * @see ErrorResponse
 * @see UserSimultaneousRingPersonalGetRequest14sp4
 */
class UserSimultaneousRingPersonalGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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


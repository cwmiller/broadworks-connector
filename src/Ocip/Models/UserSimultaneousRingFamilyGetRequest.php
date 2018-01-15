<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetRequest
 *
 * Get the user's simultaneous ring service family setting.
 *         The response is either a UserSimultaneousRingFamilyGetResponse or an
 * ErrorResponse.
 *         Replaced By: UserSimultaneousRingFamilyGetRequest14sp4
 */
class UserSimultaneousRingFamilyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


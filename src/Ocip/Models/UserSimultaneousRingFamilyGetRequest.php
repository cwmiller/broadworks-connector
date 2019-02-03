<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetRequest
 *
 * Get the user's simultaneous ring service family setting.
 *                 The response is either a UserSimultaneousRingFamilyGetResponse or an ErrorResponse.
 *                 Replaced By: UserSimultaneousRingFamilyGetRequest14sp4
 *
 * @see UserSimultaneousRingFamilyGetResponse
 * @see ErrorResponse
 * @see UserSimultaneousRingFamilyGetRequest14sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:7697","type":"sequence"}]
 */
class UserSimultaneousRingFamilyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7697
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


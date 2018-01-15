<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDualModeVCCGetRequest
 *
 * Request to get the user level Dual Mode VCC service attributes
 *         Response is either UserDualModeVCCGetResponse or ErrorResponse
 */
class UserDualModeVCCGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


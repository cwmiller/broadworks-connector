<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserChargeNumberGetRequest14sp9
 *
 * Request the user level data associated with Charge Number.
 *         The response is either a UserChargeNumberGetResponse14sp9 or an
 * ErrorResponse.
 */
class UserChargeNumberGetRequest14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


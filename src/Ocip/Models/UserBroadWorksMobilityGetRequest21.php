<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityGetRequest21
 *
 * Get the user's BroadWorks Mobility service settings.
 *         The response is either a UserBroadWorksMobilityGetResponse21 or an
 * ErrorResponse.
 */
class UserBroadWorksMobilityGetRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


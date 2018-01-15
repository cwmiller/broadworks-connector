<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommPilotExpressSRGetRequest13mp16
 *
 * Get the user's commPilot express SR service setting.
 *         The response is either a UserCommPilotExpressSRGetResponse13mp16 or an
 * ErrorResponse.
 */
class UserCommPilotExpressSRGetRequest13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


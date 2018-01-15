<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantGetRequest
 *
 * Request to get the User Personal Assistant information.
 *         The response is either a UserPersonalAssistantGetResponse or an
 * ErrorResponse.
 */
class UserPersonalAssistantGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


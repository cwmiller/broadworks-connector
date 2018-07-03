<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetAssistantRequest
 *
 * Get the assistant setting and the list of assistants assigned to an executive.
 *         The response is either UserExecutiveGetAssistantsResponse or
 * ErrorResponse.
 *
 * @see UserExecutiveGetAssistantsResponse
 * @see ErrorResponse
 */
class UserExecutiveGetAssistantRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


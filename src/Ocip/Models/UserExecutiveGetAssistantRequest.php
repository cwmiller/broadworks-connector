<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetAssistantRequest
 *
 * Get the assistant setting and the list of assistants assigned to an executive.
 *         The response is either UserExecutiveGetAssistantResponse or ErrorResponse.
 *
 * @see UserExecutiveGetAssistantResponse
 * @see ErrorResponse
 * @Groups [{"id":"f5d58d7e1c3de827d7f1ff867a413cdd:141","type":"sequence"}]
 */
class UserExecutiveGetAssistantRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f5d58d7e1c3de827d7f1ff867a413cdd:141
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


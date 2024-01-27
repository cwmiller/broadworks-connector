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
 * @Groups [{"id":"3a54ac906cb7002cc1a30fbb0efadb0a:140","type":"sequence"}]
 */
class UserExecutiveGetAssistantRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:140
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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


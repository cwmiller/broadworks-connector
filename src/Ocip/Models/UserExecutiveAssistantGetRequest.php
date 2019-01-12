<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveAssistantGetRequest
 *
 * Get the setting of an executive assistant.
 *         The response is either UserExecutiveAssistantGetResponse or ErrorResponse.
 *
 * @see UserExecutiveAssistantGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"edd49e38c60ed5c00d394f2a35697c84:42","type":"sequence"}]
 */
class UserExecutiveAssistantGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group edd49e38c60ed5c00d394f2a35697c84:42
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


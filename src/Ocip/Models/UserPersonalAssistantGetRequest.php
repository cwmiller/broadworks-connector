<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantGetRequest
 *
 * Request to get the User Personal Assistant information.
 *                 The response is either a UserPersonalAssistantGetResponse or an ErrorResponse.
 *
 *                 Replaced by: UserPersonalAssistantGetRequest22
 *
 * @see UserPersonalAssistantGetResponse
 * @see ErrorResponse
 * @see UserPersonalAssistantGetRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:7490","type":"sequence"}]
 */
class UserPersonalAssistantGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7490
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


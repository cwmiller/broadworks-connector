<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateInstantRoomParametersGetRequest
 *
 * Request collaborate instant room settings.
 *         The response is either UserCollaborateInstantRoomParametersGetResponse or 
 *         ErrorResponse.
 *
 * @see UserCollaborateInstantRoomParametersGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"939fd5846dfae8bdf58308d6cb9ebb12:703","type":"sequence"}]
 */
class UserCollaborateInstantRoomParametersGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:703
     * @MinLength 1
     * @MaxLength 161
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


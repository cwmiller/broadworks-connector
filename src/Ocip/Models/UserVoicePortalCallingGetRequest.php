<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoicePortalCallingGetRequest
 *
 * Request the user level data associated with Voice Portal Calling.
 *         The response is either a UserVoicePortalCallingGetResponse or an
 *         ErrorResponse.
 *
 * @see UserVoicePortalCallingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"23caf3c7f8f181bcb5b4719a3564ba94:42","type":"sequence"}]
 */
class UserVoicePortalCallingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 23caf3c7f8f181bcb5b4719a3564ba94:42
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


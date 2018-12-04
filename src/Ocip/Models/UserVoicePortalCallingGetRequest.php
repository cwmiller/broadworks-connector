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
 * @Groups [{"id":"d9e71f5e4ef1555a03e2effebea2ea8d:42","type":"sequence"}]
 */
class UserVoicePortalCallingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group d9e71f5e4ef1555a03e2effebea2ea8d:42
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOCICallControlApplicationGetListRequest
 *
 * Get the OCI call control application list that can be used by the user.
 *         The response is either UserOCICallControlApplicationGetListResponse or
 * ErrorResponse.
 *
 * @see UserOCICallControlApplicationGetListResponse
 * @see ErrorResponse
 */
class UserOCICallControlApplicationGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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


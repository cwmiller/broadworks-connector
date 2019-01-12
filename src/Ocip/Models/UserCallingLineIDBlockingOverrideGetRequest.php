<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingLineIDBlockingOverrideGetRequest
 *
 * Request the user level data associated with Calling Line ID Blocking Override.
 *         The response is either a UserCallingLineIDBlockingOverrideGetResponse or an
 *         ErrorResponse.
 *
 * @see UserCallingLineIDBlockingOverrideGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"f23c819d0aa2b40aeba3248b27fe2520:44","type":"sequence"}]
 */
class UserCallingLineIDBlockingOverrideGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f23c819d0aa2b40aeba3248b27fe2520:44
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


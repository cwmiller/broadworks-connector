<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationRequest
 *
 * AuthenticationRequest is 1st stage of the 2 stage OCI login process.
 *         The response is either AuthenticationResponse or ErrorResponse
 *
 * @see AuthenticationRequest
 * @see AuthenticationResponse
 * @see ErrorResponse
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:3862","type":"sequence"}]
 */
class AuthenticationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:3862
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


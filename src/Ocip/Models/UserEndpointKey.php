<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEndpointKey
 *
 * Key to uniquely identify a user endpoint.
 */
class UserEndpointKey
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName linePort
     * @var string|null
     */
    private $linePort = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for linePort
     *
     * @ElementName linePort
     * @return string|null
     */
    public function getLinePort()
    {
        return $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @ElementName linePort
     * @param string|null $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }


}


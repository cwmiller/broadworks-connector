<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEndpointKey
 *
 * Key to uniquely identify a user endpoint.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5710","type":"sequence"}]
 */
class UserEndpointKey
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5710
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5710
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

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

    /**
     * Getter for linePort
     *
     * @return string
     */
    public function getLinePort()
    {
        return $this->linePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @param string $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePort()
    {
        $this->linePort = null;
        return $this;
    }
}


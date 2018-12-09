<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEndpointKey
 *
 * Key to uniquely identify a user endpoint.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:3951","type":"sequence"}]
 */
class UserEndpointKey
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:3951
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:3951
     * @var string|null
     */
    private $linePort = null;

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


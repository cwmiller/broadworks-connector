<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEndpointKey
 *
 * Key to uniquely identify a user endpoint.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:4536","type":"sequence"}]
 */
class UserEndpointKey
{

    /**
     * @ElementName userId
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4536
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4536
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


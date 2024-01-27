<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RandomPort
 *
 * Represents either a random port number, or a specific port number.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4072","type":"choice"}]
 */
class RandomPort
{
    /**
     * @ElementName random
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4072
     * @var string|null
     */
    protected $random = null;

    /**
     * @ElementName port
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4072
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $port = null;

    /**
     * Getter for random
     *
     * @return string
     */
    public function getRandom()
    {
        return $this->random instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->random;
    }

    /**
     * Setter for random
     *
     * @param string $random
     * @return $this
     */
    public function setRandom($random)
    {
        $this->random = $random;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRandom()
    {
        $this->random = null;
        return $this;
    }

    /**
     * Getter for port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->port instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->port;
    }

    /**
     * Setter for port
     *
     * @param int $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPort()
    {
        $this->port = null;
        return $this;
    }
}


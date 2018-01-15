<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RandomPort
 *
 * Represents either a random port number, or a specific port number.
 */
class RandomPort
{

    /**
     * @ElementName random
     * @var string|null
     */
    private $random = null;

    /**
     * @ElementName port
     * @var int|null
     */
    private $port = null;

    /**
     * Getter for random
     *
     * @ElementName random
     * @return string|null
     */
    public function getRandom()
    {
        return $this->random;
    }

    /**
     * Setter for random
     *
     * @ElementName random
     * @param string|null $random
     * @return $this
     */
    public function setRandom($random)
    {
        $this->random = $random;
        return $this;
    }

    /**
     * Getter for port
     *
     * @ElementName port
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Setter for port
     *
     * @ElementName port
     * @param int|null $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }


}


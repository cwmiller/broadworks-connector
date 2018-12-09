<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RandomPort
 *
 * Represents either a random port number, or a specific port number.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:2575","type":"choice"}]
 */
class RandomPort
{

    /**
     * @ElementName random
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:2575
     * @var string|null
     */
    private $random = null;

    /**
     * @ElementName port
     * @Type int
     * @Group 8e629edbac315ae7889caca732382c44:2575
     * @var int|null
     */
    private $port = null;

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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactPortNumber
 *
 * Criteria for searching for a port number.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1183","type":"sequence"}]
 */
class SearchCriteriaExactPortNumber extends SearchCriteria
{
    /**
     * @ElementName port
     * @Type int
     * @Group 972fbf832439609ec8f2765c5637c3f1:1183
     * @MinInclusive 1
     * @MaxInclusive 1024
     * @var int|null
     */
    protected $port = null;

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


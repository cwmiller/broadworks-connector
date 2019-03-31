<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactPortNumber
 *
 * Criteria for searching for a port number.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1060","type":"sequence"}]
 */
class SearchCriteriaExactPortNumber extends SearchCriteria
{

    /**
     * @ElementName port
     * @Type int
     * @Group f0ada2681ca347fa83b464734259b304:1060
     * @MinInclusive 1
     * @MaxInclusive 1024
     * @var int|null
     */
    private $port = null;

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


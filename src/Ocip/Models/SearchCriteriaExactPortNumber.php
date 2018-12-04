<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactPortNumber
 *
 * Criteria for searching for a port number.
 *
 * @Groups [{"id":"d37849f5e289836ccd316323a7a3799a:977","type":"sequence"}]
 */
class SearchCriteriaExactPortNumber extends SearchCriteria
{

    /**
     * @ElementName port
     * @Type int
     * @Group d37849f5e289836ccd316323a7a3799a:977
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


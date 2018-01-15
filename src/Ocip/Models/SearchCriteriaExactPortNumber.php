<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactPortNumber
 *
 * Criteria for searching for a port number.
 */
class SearchCriteriaExactPortNumber extends SearchCriteria
{

    /**
     * @ElementName port
     * @var int|null
     */
    private $port = null;

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


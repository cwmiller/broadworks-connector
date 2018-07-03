<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserINIntegrationGetResponse
 *
 * Response to UserINIntegrationGetRequest
 *
 * @see UserINIntegrationGetRequest
 */
class UserINIntegrationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName originatingServiceKey
     * @var int|null
     */
    private $originatingServiceKey = null;

    /**
     * @ElementName terminatingServiceKey
     * @var int|null
     */
    private $terminatingServiceKey = null;

    /**
     * Getter for originatingServiceKey
     *
     * @ElementName originatingServiceKey
     * @return int|null
     */
    public function getOriginatingServiceKey()
    {
        return $this->originatingServiceKey;
    }

    /**
     * Setter for originatingServiceKey
     *
     * @ElementName originatingServiceKey
     * @param int|null $originatingServiceKey
     * @return $this
     */
    public function setOriginatingServiceKey($originatingServiceKey)
    {
        $this->originatingServiceKey = $originatingServiceKey;
        return $this;
    }

    /**
     * Getter for terminatingServiceKey
     *
     * @ElementName terminatingServiceKey
     * @return int|null
     */
    public function getTerminatingServiceKey()
    {
        return $this->terminatingServiceKey;
    }

    /**
     * Setter for terminatingServiceKey
     *
     * @ElementName terminatingServiceKey
     * @param int|null $terminatingServiceKey
     * @return $this
     */
    public function setTerminatingServiceKey($terminatingServiceKey)
    {
        $this->terminatingServiceKey = $terminatingServiceKey;
        return $this;
    }


}


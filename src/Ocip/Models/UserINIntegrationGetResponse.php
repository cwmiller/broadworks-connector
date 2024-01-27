<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserINIntegrationGetResponse
 *
 * Response to UserINIntegrationGetRequest
 *
 * @see UserINIntegrationGetRequest
 * @Groups [{"id":"841786e27ac49a43576369a93b4cc726:56","type":"sequence"}]
 */
class UserINIntegrationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName originatingServiceKey
     * @Type int
     * @Optional
     * @Group 841786e27ac49a43576369a93b4cc726:56
     * @MinInclusive 0
     * @MaxInclusive 999
     * @var int|null
     */
    protected $originatingServiceKey = null;

    /**
     * @ElementName terminatingServiceKey
     * @Type int
     * @Optional
     * @Group 841786e27ac49a43576369a93b4cc726:56
     * @MinInclusive 0
     * @MaxInclusive 999
     * @var int|null
     */
    protected $terminatingServiceKey = null;

    /**
     * Getter for originatingServiceKey
     *
     * @return int
     */
    public function getOriginatingServiceKey()
    {
        return $this->originatingServiceKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatingServiceKey;
    }

    /**
     * Setter for originatingServiceKey
     *
     * @param int $originatingServiceKey
     * @return $this
     */
    public function setOriginatingServiceKey($originatingServiceKey)
    {
        $this->originatingServiceKey = $originatingServiceKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatingServiceKey()
    {
        $this->originatingServiceKey = null;
        return $this;
    }

    /**
     * Getter for terminatingServiceKey
     *
     * @return int
     */
    public function getTerminatingServiceKey()
    {
        return $this->terminatingServiceKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->terminatingServiceKey;
    }

    /**
     * Setter for terminatingServiceKey
     *
     * @param int $terminatingServiceKey
     * @return $this
     */
    public function setTerminatingServiceKey($terminatingServiceKey)
    {
        $this->terminatingServiceKey = $terminatingServiceKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTerminatingServiceKey()
    {
        $this->terminatingServiceKey = null;
        return $this;
    }
}


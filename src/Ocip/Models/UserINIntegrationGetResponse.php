<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserINIntegrationGetResponse
 *
 * Response to UserINIntegrationGetRequest
 *
 * @see UserINIntegrationGetRequest
 * @Groups [{"id":"e2b7b9ea45350592016ce6935a4d7694:56","type":"sequence"}]
 */
class UserINIntegrationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName originatingServiceKey
     * @Type int
     * @Optional
     * @Group e2b7b9ea45350592016ce6935a4d7694:56
     * @var int|null
     */
    private $originatingServiceKey = null;

    /**
     * @ElementName terminatingServiceKey
     * @Type int
     * @Optional
     * @Group e2b7b9ea45350592016ce6935a4d7694:56
     * @var int|null
     */
    private $terminatingServiceKey = null;

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


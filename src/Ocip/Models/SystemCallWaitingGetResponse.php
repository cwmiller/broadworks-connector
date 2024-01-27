<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallWaitingGetResponse
 *
 * Response to SystemCallWaitingGetRequest.
 *
 * @see SystemCallWaitingGetRequest
 * @Groups [{"id":"08ee5b5ec09321975436b908fd540e7f:57","type":"sequence"}]
 */
class SystemCallWaitingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName playDistinctiveRingback
     * @Type bool
     * @Group 08ee5b5ec09321975436b908fd540e7f:57
     * @var bool|null
     */
    protected $playDistinctiveRingback = null;

    /**
     * Getter for playDistinctiveRingback
     *
     * @return bool
     */
    public function getPlayDistinctiveRingback()
    {
        return $this->playDistinctiveRingback instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playDistinctiveRingback;
    }

    /**
     * Setter for playDistinctiveRingback
     *
     * @param bool $playDistinctiveRingback
     * @return $this
     */
    public function setPlayDistinctiveRingback($playDistinctiveRingback)
    {
        $this->playDistinctiveRingback = $playDistinctiveRingback;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayDistinctiveRingback()
    {
        $this->playDistinctiveRingback = null;
        return $this;
    }
}


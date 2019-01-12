<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallWaitingModifyRequest
 *
 * Modify the system level data associated with Call Waiting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e12337fe0480db757507a0699bc195d9:73","type":"sequence"}]
 */
class SystemCallWaitingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName playDistinctiveRingback
     * @Type bool
     * @Optional
     * @Group e12337fe0480db757507a0699bc195d9:73
     * @var bool|null
     */
    private $playDistinctiveRingback = null;

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


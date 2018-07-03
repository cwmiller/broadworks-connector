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
 */
class SystemCallWaitingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName playDistinctiveRingback
     * @var bool|null
     */
    private $playDistinctiveRingback = null;

    /**
     * Getter for playDistinctiveRingback
     *
     * @ElementName playDistinctiveRingback
     * @return bool|null
     */
    public function getPlayDistinctiveRingback()
    {
        return $this->playDistinctiveRingback;
    }

    /**
     * Setter for playDistinctiveRingback
     *
     * @ElementName playDistinctiveRingback
     * @param bool|null $playDistinctiveRingback
     * @return $this
     */
    public function setPlayDistinctiveRingback($playDistinctiveRingback)
    {
        $this->playDistinctiveRingback = $playDistinctiveRingback;
        return $this;
    }


}


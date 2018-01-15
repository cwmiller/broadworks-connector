<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallWaitingGetResponse
 *
 * Response to SystemCallWaitingGetRequest.
 */
class SystemCallWaitingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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


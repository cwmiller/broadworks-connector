<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMusicOnHoldModifyRequest
 *
 * Modify the system level data associated with Music On Hold.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMusicOnHoldModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName delayMilliseconds
     * @var int|null
     */
    private $delayMilliseconds = null;

    /**
     * Getter for delayMilliseconds
     *
     * @ElementName delayMilliseconds
     * @return int|null
     */
    public function getDelayMilliseconds()
    {
        return $this->delayMilliseconds;
    }

    /**
     * Setter for delayMilliseconds
     *
     * @ElementName delayMilliseconds
     * @param int|null $delayMilliseconds
     * @return $this
     */
    public function setDelayMilliseconds($delayMilliseconds)
    {
        $this->delayMilliseconds = $delayMilliseconds;
        return $this;
    }


}


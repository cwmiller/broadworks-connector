<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMusicOnHoldModifyRequest
 *
 * Modify the system level data associated with Music On Hold.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3a0309eb8d406fefc891f554ef114669:229","type":"sequence"}]
 */
class SystemMusicOnHoldModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName delayMilliseconds
     * @Type int
     * @Optional
     * @Group 3a0309eb8d406fefc891f554ef114669:229
     * @MinInclusive 0
     * @MaxInclusive 5000
     * @var int|null
     */
    protected $delayMilliseconds = null;

    /**
     * Getter for delayMilliseconds
     *
     * @return int
     */
    public function getDelayMilliseconds()
    {
        return $this->delayMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->delayMilliseconds;
    }

    /**
     * Setter for delayMilliseconds
     *
     * @param int $delayMilliseconds
     * @return $this
     */
    public function setDelayMilliseconds($delayMilliseconds)
    {
        $this->delayMilliseconds = $delayMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDelayMilliseconds()
    {
        $this->delayMilliseconds = null;
        return $this;
    }
}


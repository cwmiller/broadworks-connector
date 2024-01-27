<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMusicOnHoldGetResponse
 *
 * Response to SystemMusicOnHoldGetRequest.
 *
 * @see SystemMusicOnHoldGetRequest
 * @Groups [{"id":"3a0309eb8d406fefc891f554ef114669:213","type":"sequence"}]
 */
class SystemMusicOnHoldGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName delayMilliseconds
     * @Type int
     * @Group 3a0309eb8d406fefc891f554ef114669:213
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


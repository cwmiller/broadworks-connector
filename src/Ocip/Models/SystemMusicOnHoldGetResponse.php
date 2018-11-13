<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMusicOnHoldGetResponse
 *
 * Response to SystemMusicOnHoldGetRequest.
 *
 * @see SystemMusicOnHoldGetRequest
 */
class SystemMusicOnHoldGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName delayMilliseconds
     * @Type int
     * @var int|null
     */
    private $delayMilliseconds = null;

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


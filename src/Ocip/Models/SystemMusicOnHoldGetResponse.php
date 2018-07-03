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


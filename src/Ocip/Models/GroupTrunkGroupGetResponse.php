<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetResponse
 *
 * Response to the GroupTrunkGroupGetRequest.
 *         The response contains the maximum permissible active trunk group calls for the group.
 *
 * @see GroupTrunkGroupGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:15966","type":"sequence"}]
 */
class GroupTrunkGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName maxActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group d8f04177e438f303b41c211e518706bf:15966
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    protected $maxActiveCalls = null;

    /**
     * @ElementName maxAvailableActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group d8f04177e438f303b41c211e518706bf:15966
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    protected $maxAvailableActiveCalls = null;

    /**
     * Getter for maxActiveCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $maxActiveCalls)
    {
        $this->maxActiveCalls = $maxActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxActiveCalls()
    {
        $this->maxActiveCalls = null;
        return $this;
    }

    /**
     * Getter for maxAvailableActiveCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getMaxAvailableActiveCalls()
    {
        return $this->maxAvailableActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxAvailableActiveCalls;
    }

    /**
     * Setter for maxAvailableActiveCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $maxAvailableActiveCalls
     * @return $this
     */
    public function setMaxAvailableActiveCalls(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $maxAvailableActiveCalls)
    {
        $this->maxAvailableActiveCalls = $maxAvailableActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxAvailableActiveCalls()
    {
        $this->maxAvailableActiveCalls = null;
        return $this;
    }
}


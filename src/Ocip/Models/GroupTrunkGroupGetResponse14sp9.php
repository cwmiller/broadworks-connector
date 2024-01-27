<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetResponse14sp9
 *
 * Response to the GroupTrunkGroupGetRequest14sp9.
 *         The response contains the maximum and bursting maximum permissible active trunk group calls for the group.
 *         
 *         Deprecated by GroupTrunkGroupGetResponse23
 *
 * @see GroupTrunkGroupGetRequest14sp9
 * @see GroupTrunkGroupGetResponse23
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:16004","type":"sequence"}]
 */
class GroupTrunkGroupGetResponse14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName maxActiveCalls
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:16004
     * @var int|null
     */
    protected $maxActiveCalls = null;

    /**
     * @ElementName maxAvailableActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group d8f04177e438f303b41c211e518706bf:16004
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    protected $maxAvailableActiveCalls = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group d8f04177e438f303b41c211e518706bf:16004
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    protected $burstingMaxActiveCalls = null;

    /**
     * @ElementName burstingMaxAvailableActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group d8f04177e438f303b41c211e518706bf:16004
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    protected $burstingMaxAvailableActiveCalls = null;

    /**
     * Getter for maxActiveCalls
     *
     * @return int
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @param int $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls($maxActiveCalls)
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

    /**
     * Getter for burstingMaxActiveCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxActiveCalls;
    }

    /**
     * Setter for burstingMaxActiveCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $burstingMaxActiveCalls
     * @return $this
     */
    public function setBurstingMaxActiveCalls(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $burstingMaxActiveCalls)
    {
        $this->burstingMaxActiveCalls = $burstingMaxActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBurstingMaxActiveCalls()
    {
        $this->burstingMaxActiveCalls = null;
        return $this;
    }

    /**
     * Getter for burstingMaxAvailableActiveCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getBurstingMaxAvailableActiveCalls()
    {
        return $this->burstingMaxAvailableActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxAvailableActiveCalls;
    }

    /**
     * Setter for burstingMaxAvailableActiveCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $burstingMaxAvailableActiveCalls
     * @return $this
     */
    public function setBurstingMaxAvailableActiveCalls(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $burstingMaxAvailableActiveCalls)
    {
        $this->burstingMaxAvailableActiveCalls = $burstingMaxAvailableActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBurstingMaxAvailableActiveCalls()
    {
        $this->burstingMaxAvailableActiveCalls = null;
        return $this;
    }
}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetResponse14sp1
 *
 * Response to the GroupTrunkGroupGetRequest14sp1.
 *         The response contains the maximum and bursting maximum permissible active trunk group calls for the group.
 *
 * @see GroupTrunkGroupGetRequest14sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:2752","type":"sequence"}]
 */
class GroupTrunkGroupGetResponse14sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2752
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName maxAvailableActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2752
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $maxAvailableActiveCalls = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2752
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $burstingMaxActiveCalls = null;

    /**
     * @ElementName burstingMaxAvailableActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2752
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $burstingMaxAvailableActiveCalls = null;

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


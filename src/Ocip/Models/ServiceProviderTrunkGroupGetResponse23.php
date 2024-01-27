<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderTrunkGroupGetResponse23
 *
 * Response to the ServiceProviderTrunkGroupGetRequest23.
 *         The response contains the maximum and bursting maximum permissible active trunk group calls for the service provider.
 *
 * @see ServiceProviderTrunkGroupGetRequest23
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:1630","type":"sequence"}]
 */
class ServiceProviderTrunkGroupGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName maxActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1630
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    protected $maxActiveCalls = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1630
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    protected $burstingMaxActiveCalls = null;

    /**
     * @ElementName numberOfBurstingBTLUs
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1630
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    protected $numberOfBurstingBTLUs = null;

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
     * Getter for numberOfBurstingBTLUs
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getNumberOfBurstingBTLUs()
    {
        return $this->numberOfBurstingBTLUs instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfBurstingBTLUs;
    }

    /**
     * Setter for numberOfBurstingBTLUs
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $numberOfBurstingBTLUs
     * @return $this
     */
    public function setNumberOfBurstingBTLUs(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $numberOfBurstingBTLUs)
    {
        $this->numberOfBurstingBTLUs = $numberOfBurstingBTLUs;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfBurstingBTLUs()
    {
        $this->numberOfBurstingBTLUs = null;
        return $this;
    }
}


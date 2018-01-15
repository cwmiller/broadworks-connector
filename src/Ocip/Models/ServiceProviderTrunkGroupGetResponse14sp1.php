<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderTrunkGroupGetResponse14sp1
 *
 * Response to the ServiceProviderTrunkGroupGetRequest14sp1.
 *         The response contains the maximum and bursting maximum permissible
 * active trunk group calls for the service provider.
 */
class ServiceProviderTrunkGroupGetResponse14sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxActiveCalls
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $burstingMaxActiveCalls = null;

    /**
     * Getter for maxActiveCalls
     *
     * @ElementName maxActiveCalls
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @ElementName maxActiveCalls
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls($maxActiveCalls)
    {
        $this->maxActiveCalls = $maxActiveCalls;
        return $this;
    }

    /**
     * Getter for burstingMaxActiveCalls
     *
     * @ElementName burstingMaxActiveCalls
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls;
    }

    /**
     * Setter for burstingMaxActiveCalls
     *
     * @ElementName burstingMaxActiveCalls
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null $burstingMaxActiveCalls
     * @return $this
     */
    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls)
    {
        $this->burstingMaxActiveCalls = $burstingMaxActiveCalls;
        return $this;
    }


}


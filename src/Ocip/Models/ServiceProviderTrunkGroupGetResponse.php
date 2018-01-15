<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderTrunkGroupGetResponse
 *
 * Response to the ServiceProviderTrunkGroupGetRequest.
 *         The response contains the maximum permissible active trunk group calls
 * for the service provider.
 */
class ServiceProviderTrunkGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxActiveCalls
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $maxActiveCalls = null;

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


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetResponse
 *
 * Response to the GroupTrunkGroupGetRequest.
 *         The response contains the maximum permissible active trunk group calls
 * for the group.
 *
 * @see GroupTrunkGroupGetRequest
 */
class GroupTrunkGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxActiveCalls
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName maxAvailableActiveCalls
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $maxAvailableActiveCalls = null;

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
     * Getter for maxAvailableActiveCalls
     *
     * @ElementName maxAvailableActiveCalls
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    public function getMaxAvailableActiveCalls()
    {
        return $this->maxAvailableActiveCalls;
    }

    /**
     * Setter for maxAvailableActiveCalls
     *
     * @ElementName maxAvailableActiveCalls
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null $maxAvailableActiveCalls
     * @return $this
     */
    public function setMaxAvailableActiveCalls($maxAvailableActiveCalls)
    {
        $this->maxAvailableActiveCalls = $maxAvailableActiveCalls;
        return $this;
    }


}


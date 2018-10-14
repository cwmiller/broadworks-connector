<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMaliciousCallTraceGetResponse
 *
 * Response to UserMaliciousCallTraceGetRequest.
 *
 * @see UserMaliciousCallTraceGetRequest
 */
class UserMaliciousCallTraceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName traceTypeSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection|null
     */
    private $traceTypeSelection = null;

    /**
     * @ElementName traceForTimePeriod
     * @var bool|null
     */
    private $traceForTimePeriod = null;

    /**
     * @ElementName traceTimePeriod
     * @var \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod|null
     */
    private $traceTimePeriod = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for traceTypeSelection
     *
     * @ElementName traceTypeSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection|null
     */
    public function getTraceTypeSelection()
    {
        return $this->traceTypeSelection;
    }

    /**
     * Setter for traceTypeSelection
     *
     * @ElementName traceTypeSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection|null $traceTypeSelection
     * @return $this
     */
    public function setTraceTypeSelection(\CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection $traceTypeSelection)
    {
        $this->traceTypeSelection = $traceTypeSelection;
        return $this;
    }

    /**
     * Getter for traceForTimePeriod
     *
     * @ElementName traceForTimePeriod
     * @return bool|null
     */
    public function getTraceForTimePeriod()
    {
        return $this->traceForTimePeriod;
    }

    /**
     * Setter for traceForTimePeriod
     *
     * @ElementName traceForTimePeriod
     * @param bool|null $traceForTimePeriod
     * @return $this
     */
    public function setTraceForTimePeriod($traceForTimePeriod)
    {
        $this->traceForTimePeriod = $traceForTimePeriod;
        return $this;
    }

    /**
     * Getter for traceTimePeriod
     *
     * @ElementName traceTimePeriod
     * @return \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod|null
     */
    public function getTraceTimePeriod()
    {
        return $this->traceTimePeriod;
    }

    /**
     * Setter for traceTimePeriod
     *
     * @ElementName traceTimePeriod
     * @param \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod|null $traceTimePeriod
     * @return $this
     */
    public function setTraceTimePeriod(\CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod $traceTimePeriod)
    {
        $this->traceTimePeriod = $traceTimePeriod;
        return $this;
    }


}


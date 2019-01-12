<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMaliciousCallTraceGetResponse
 *
 * Response to UserMaliciousCallTraceGetRequest.
 *
 * @see UserMaliciousCallTraceGetRequest
 * @Groups [{"id":"0da7c658f240cdc10c3f9cb328db57d8:168","type":"sequence"}]
 */
class UserMaliciousCallTraceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 0da7c658f240cdc10c3f9cb328db57d8:168
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName traceTypeSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection
     * @Group 0da7c658f240cdc10c3f9cb328db57d8:168
     * @var \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection|null
     */
    private $traceTypeSelection = null;

    /**
     * @ElementName traceForTimePeriod
     * @Type bool
     * @Group 0da7c658f240cdc10c3f9cb328db57d8:168
     * @var bool|null
     */
    private $traceForTimePeriod = null;

    /**
     * @ElementName traceTimePeriod
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod
     * @Optional
     * @Group 0da7c658f240cdc10c3f9cb328db57d8:168
     * @var \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod|null
     */
    private $traceTimePeriod = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for traceTypeSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection
     */
    public function getTraceTypeSelection()
    {
        return $this->traceTypeSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->traceTypeSelection;
    }

    /**
     * Setter for traceTypeSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection $traceTypeSelection
     * @return $this
     */
    public function setTraceTypeSelection(\CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceCallTypeSelection $traceTypeSelection)
    {
        $this->traceTypeSelection = $traceTypeSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTraceTypeSelection()
    {
        $this->traceTypeSelection = null;
        return $this;
    }

    /**
     * Getter for traceForTimePeriod
     *
     * @return bool
     */
    public function getTraceForTimePeriod()
    {
        return $this->traceForTimePeriod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->traceForTimePeriod;
    }

    /**
     * Setter for traceForTimePeriod
     *
     * @param bool $traceForTimePeriod
     * @return $this
     */
    public function setTraceForTimePeriod($traceForTimePeriod)
    {
        $this->traceForTimePeriod = $traceForTimePeriod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTraceForTimePeriod()
    {
        $this->traceForTimePeriod = null;
        return $this;
    }

    /**
     * Getter for traceTimePeriod
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod
     */
    public function getTraceTimePeriod()
    {
        return $this->traceTimePeriod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->traceTimePeriod;
    }

    /**
     * Setter for traceTimePeriod
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod $traceTimePeriod
     * @return $this
     */
    public function setTraceTimePeriod(\CWM\BroadWorksConnector\Ocip\Models\MaliciousCallTraceTimePeriod $traceTimePeriod)
    {
        $this->traceTimePeriod = $traceTimePeriod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTraceTimePeriod()
    {
        $this->traceTimePeriod = null;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDistinctiveRingingResponse
 *
 * Response to the GroupCallCenterGetDistinctiveRingingRequest.
 *
 * @see GroupCallCenterGetDistinctiveRingingRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:4289","type":"sequence"}]
 */
class GroupCallCenterGetDistinctiveRingingResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName distinctiveRingingCallCenterCalls
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:4289
     * @var bool|null
     */
    protected $distinctiveRingingCallCenterCalls = null;

    /**
     * @ElementName distinctiveRingingRingPatternForCallCenter
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     * @Group 4d65d3449061c568639c8cc1e2492285:4289
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    protected $distinctiveRingingRingPatternForCallCenter = null;

    /**
     * @ElementName distinctiveRingingForceDeliveryRingPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:4289
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    protected $distinctiveRingingForceDeliveryRingPattern = null;

    /**
     * Getter for distinctiveRingingCallCenterCalls
     *
     * @return bool
     */
    public function getDistinctiveRingingCallCenterCalls()
    {
        return $this->distinctiveRingingCallCenterCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->distinctiveRingingCallCenterCalls;
    }

    /**
     * Setter for distinctiveRingingCallCenterCalls
     *
     * @param bool $distinctiveRingingCallCenterCalls
     * @return $this
     */
    public function setDistinctiveRingingCallCenterCalls($distinctiveRingingCallCenterCalls)
    {
        $this->distinctiveRingingCallCenterCalls = $distinctiveRingingCallCenterCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDistinctiveRingingCallCenterCalls()
    {
        $this->distinctiveRingingCallCenterCalls = null;
        return $this;
    }

    /**
     * Getter for distinctiveRingingRingPatternForCallCenter
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     */
    public function getDistinctiveRingingRingPatternForCallCenter()
    {
        return $this->distinctiveRingingRingPatternForCallCenter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->distinctiveRingingRingPatternForCallCenter;
    }

    /**
     * Setter for distinctiveRingingRingPatternForCallCenter
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RingPattern $distinctiveRingingRingPatternForCallCenter
     * @return $this
     */
    public function setDistinctiveRingingRingPatternForCallCenter(\CWM\BroadWorksConnector\Ocip\Models\RingPattern $distinctiveRingingRingPatternForCallCenter)
    {
        $this->distinctiveRingingRingPatternForCallCenter = $distinctiveRingingRingPatternForCallCenter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDistinctiveRingingRingPatternForCallCenter()
    {
        $this->distinctiveRingingRingPatternForCallCenter = null;
        return $this;
    }

    /**
     * Getter for distinctiveRingingForceDeliveryRingPattern
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     */
    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return $this->distinctiveRingingForceDeliveryRingPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->distinctiveRingingForceDeliveryRingPattern;
    }

    /**
     * Setter for distinctiveRingingForceDeliveryRingPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RingPattern $distinctiveRingingForceDeliveryRingPattern
     * @return $this
     */
    public function setDistinctiveRingingForceDeliveryRingPattern(\CWM\BroadWorksConnector\Ocip\Models\RingPattern $distinctiveRingingForceDeliveryRingPattern)
    {
        $this->distinctiveRingingForceDeliveryRingPattern = $distinctiveRingingForceDeliveryRingPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDistinctiveRingingForceDeliveryRingPattern()
    {
        $this->distinctiveRingingForceDeliveryRingPattern = null;
        return $this;
    }
}


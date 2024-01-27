<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointDistinctiveRingingGetResponse
 *
 * Response to the GroupRoutePointDistinctiveRingingGetRequest.
 *
 * @see GroupRoutePointDistinctiveRingingGetRequest
 * @Groups [{"id":"e474d11df9a1d1d1041e589793e40de8:254","type":"sequence"}]
 */
class GroupRoutePointDistinctiveRingingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableDistinctiveRinging
     * @Type bool
     * @Group e474d11df9a1d1d1041e589793e40de8:254
     * @var bool|null
     */
    protected $enableDistinctiveRinging = null;

    /**
     * @ElementName distinctiveRingingRingPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     * @Group e474d11df9a1d1d1041e589793e40de8:254
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    protected $distinctiveRingingRingPattern = null;

    /**
     * @ElementName distinctiveRingingForceDeliveryRingPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     * @Group e474d11df9a1d1d1041e589793e40de8:254
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    protected $distinctiveRingingForceDeliveryRingPattern = null;

    /**
     * Getter for enableDistinctiveRinging
     *
     * @return bool
     */
    public function getEnableDistinctiveRinging()
    {
        return $this->enableDistinctiveRinging instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDistinctiveRinging;
    }

    /**
     * Setter for enableDistinctiveRinging
     *
     * @param bool $enableDistinctiveRinging
     * @return $this
     */
    public function setEnableDistinctiveRinging($enableDistinctiveRinging)
    {
        $this->enableDistinctiveRinging = $enableDistinctiveRinging;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDistinctiveRinging()
    {
        $this->enableDistinctiveRinging = null;
        return $this;
    }

    /**
     * Getter for distinctiveRingingRingPattern
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     */
    public function getDistinctiveRingingRingPattern()
    {
        return $this->distinctiveRingingRingPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->distinctiveRingingRingPattern;
    }

    /**
     * Setter for distinctiveRingingRingPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RingPattern $distinctiveRingingRingPattern
     * @return $this
     */
    public function setDistinctiveRingingRingPattern(\CWM\BroadWorksConnector\Ocip\Models\RingPattern $distinctiveRingingRingPattern)
    {
        $this->distinctiveRingingRingPattern = $distinctiveRingingRingPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDistinctiveRingingRingPattern()
    {
        $this->distinctiveRingingRingPattern = null;
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


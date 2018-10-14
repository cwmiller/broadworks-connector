<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterDistinctiveRingingModifyRequest
 *
 * Modify the distinctive ringing configuration values for call center.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCenterDistinctiveRingingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName distinctiveRingingCallCenterCalls
     * @var bool|null
     */
    private $distinctiveRingingCallCenterCalls = null;

    /**
     * @ElementName distinctiveRingingRingPatternForCallCenter
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    private $distinctiveRingingRingPatternForCallCenter = null;

    /**
     * @ElementName distinctiveRingingForceDeliveryRingPattern
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    private $distinctiveRingingForceDeliveryRingPattern = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for distinctiveRingingCallCenterCalls
     *
     * @ElementName distinctiveRingingCallCenterCalls
     * @return bool|null
     */
    public function getDistinctiveRingingCallCenterCalls()
    {
        return $this->distinctiveRingingCallCenterCalls;
    }

    /**
     * Setter for distinctiveRingingCallCenterCalls
     *
     * @ElementName distinctiveRingingCallCenterCalls
     * @param bool|null $distinctiveRingingCallCenterCalls
     * @return $this
     */
    public function setDistinctiveRingingCallCenterCalls($distinctiveRingingCallCenterCalls)
    {
        $this->distinctiveRingingCallCenterCalls = $distinctiveRingingCallCenterCalls;
        return $this;
    }

    /**
     * Getter for distinctiveRingingRingPatternForCallCenter
     *
     * @ElementName distinctiveRingingRingPatternForCallCenter
     * @return \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    public function getDistinctiveRingingRingPatternForCallCenter()
    {
        return $this->distinctiveRingingRingPatternForCallCenter;
    }

    /**
     * Setter for distinctiveRingingRingPatternForCallCenter
     *
     * @ElementName distinctiveRingingRingPatternForCallCenter
     * @param \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null $distinctiveRingingRingPatternForCallCenter
     * @return $this
     */
    public function setDistinctiveRingingRingPatternForCallCenter(\CWM\BroadWorksConnector\Ocip\Models\RingPattern $distinctiveRingingRingPatternForCallCenter)
    {
        $this->distinctiveRingingRingPatternForCallCenter = $distinctiveRingingRingPatternForCallCenter;
        return $this;
    }

    /**
     * Getter for distinctiveRingingForceDeliveryRingPattern
     *
     * @ElementName distinctiveRingingForceDeliveryRingPattern
     * @return \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return $this->distinctiveRingingForceDeliveryRingPattern;
    }

    /**
     * Setter for distinctiveRingingForceDeliveryRingPattern
     *
     * @ElementName distinctiveRingingForceDeliveryRingPattern
     * @param \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null $distinctiveRingingForceDeliveryRingPattern
     * @return $this
     */
    public function setDistinctiveRingingForceDeliveryRingPattern(\CWM\BroadWorksConnector\Ocip\Models\RingPattern $distinctiveRingingForceDeliveryRingPattern)
    {
        $this->distinctiveRingingForceDeliveryRingPattern = $distinctiveRingingForceDeliveryRingPattern;
        return $this;
    }


}


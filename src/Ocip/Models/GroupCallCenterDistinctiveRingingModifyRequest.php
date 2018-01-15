<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterDistinctiveRingingModifyRequest
 *
 * Modify the distinctive ringing configuration values for call center.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
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
     * @var string|null
     */
    private $distinctiveRingingRingPatternForCallCenter = null;

    /**
     * @ElementName distinctiveRingingForceDeliveryRingPattern
     * @var string|null
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
     * @return string|null
     */
    public function getDistinctiveRingingRingPatternForCallCenter()
    {
        return $this->distinctiveRingingRingPatternForCallCenter;
    }

    /**
     * Setter for distinctiveRingingRingPatternForCallCenter
     *
     * @ElementName distinctiveRingingRingPatternForCallCenter
     * @param string|null $distinctiveRingingRingPatternForCallCenter
     * @return $this
     */
    public function setDistinctiveRingingRingPatternForCallCenter($distinctiveRingingRingPatternForCallCenter)
    {
        $this->distinctiveRingingRingPatternForCallCenter = $distinctiveRingingRingPatternForCallCenter;
        return $this;
    }

    /**
     * Getter for distinctiveRingingForceDeliveryRingPattern
     *
     * @ElementName distinctiveRingingForceDeliveryRingPattern
     * @return string|null
     */
    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return $this->distinctiveRingingForceDeliveryRingPattern;
    }

    /**
     * Setter for distinctiveRingingForceDeliveryRingPattern
     *
     * @ElementName distinctiveRingingForceDeliveryRingPattern
     * @param string|null $distinctiveRingingForceDeliveryRingPattern
     * @return $this
     */
    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern)
    {
        $this->distinctiveRingingForceDeliveryRingPattern = $distinctiveRingingForceDeliveryRingPattern;
        return $this;
    }


}


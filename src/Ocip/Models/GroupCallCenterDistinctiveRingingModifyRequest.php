<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterDistinctiveRingingModifyRequest
 *
 * Modify the distinctive ringing configuration values for call center.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following element is only used in AS data mode and ignored in XS data mode:
 *           distinctiveRingingForceDeliveryRingPattern
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:3253","type":"sequence"}]
 */
class GroupCallCenterDistinctiveRingingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:3253
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName distinctiveRingingCallCenterCalls
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3253
     * @var bool|null
     */
    private $distinctiveRingingCallCenterCalls = null;

    /**
     * @ElementName distinctiveRingingRingPatternForCallCenter
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3253
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    private $distinctiveRingingRingPatternForCallCenter = null;

    /**
     * @ElementName distinctiveRingingForceDeliveryRingPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3253
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    private $distinctiveRingingForceDeliveryRingPattern = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

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


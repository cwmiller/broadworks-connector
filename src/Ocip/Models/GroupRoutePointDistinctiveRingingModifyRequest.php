<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointDistinctiveRingingModifyRequest
 *
 * Modify the distinctive ringing configuration values for route point.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupRoutePointDistinctiveRingingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName enableDistinctiveRinging
     * @Type bool
     * @var bool|null
     */
    private $enableDistinctiveRinging = null;

    /**
     * @ElementName distinctiveRingingRingPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    private $distinctiveRingingRingPattern = null;

    /**
     * @ElementName distinctiveRingingForceDeliveryRingPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RingPattern
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


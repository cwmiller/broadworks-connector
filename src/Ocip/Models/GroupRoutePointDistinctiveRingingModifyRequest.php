<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointDistinctiveRingingModifyRequest
 *
 * Modify the distinctive ringing configuration values for route point.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointDistinctiveRingingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName enableDistinctiveRinging
     * @var bool|null
     */
    private $enableDistinctiveRinging = null;

    /**
     * @ElementName distinctiveRingingRingPattern
     * @var string|null
     */
    private $distinctiveRingingRingPattern = null;

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
     * Getter for enableDistinctiveRinging
     *
     * @ElementName enableDistinctiveRinging
     * @return bool|null
     */
    public function getEnableDistinctiveRinging()
    {
        return $this->enableDistinctiveRinging;
    }

    /**
     * Setter for enableDistinctiveRinging
     *
     * @ElementName enableDistinctiveRinging
     * @param bool|null $enableDistinctiveRinging
     * @return $this
     */
    public function setEnableDistinctiveRinging($enableDistinctiveRinging)
    {
        $this->enableDistinctiveRinging = $enableDistinctiveRinging;
        return $this;
    }

    /**
     * Getter for distinctiveRingingRingPattern
     *
     * @ElementName distinctiveRingingRingPattern
     * @return string|null
     */
    public function getDistinctiveRingingRingPattern()
    {
        return $this->distinctiveRingingRingPattern;
    }

    /**
     * Setter for distinctiveRingingRingPattern
     *
     * @ElementName distinctiveRingingRingPattern
     * @param string|null $distinctiveRingingRingPattern
     * @return $this
     */
    public function setDistinctiveRingingRingPattern($distinctiveRingingRingPattern)
    {
        $this->distinctiveRingingRingPattern = $distinctiveRingingRingPattern;
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterModifyAvailabilityListRequest
 *
 * Request for an agent to login or logout of one or more Call Centers.
 *                 Contains a list specifing the desired login status of one or more call centers.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *                 Replaced By: UserCallCenterModifyRequest17sp4
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserCallCenterModifyRequest17sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:6887","type":"sequence"}]
 */
class UserCallCenterModifyAvailabilityListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6887
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName callCenterAvailability
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentAvailability
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6887
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentAvailability[]
     */
    private $callCenterAvailability = array(
        
    );

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for callCenterAvailability
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentAvailability[]
     */
    public function getCallCenterAvailability()
    {
        return $this->callCenterAvailability instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCenterAvailability;
    }

    /**
     * Setter for callCenterAvailability
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentAvailability[] $callCenterAvailability
     * @return $this
     */
    public function setCallCenterAvailability(array $callCenterAvailability)
    {
        $this->callCenterAvailability = $callCenterAvailability;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCenterAvailability()
    {
        $this->callCenterAvailability = null;
        return $this;
    }

    /**
     * Adder for callCenterAvailability
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentAvailability $callCenterAvailability
     * @return $this
     */
    public function addCallCenterAvailability($callCenterAvailability)
    {
        $this->callCenterAvailability[] = $callCenterAvailability;
        return $this;
    }


}


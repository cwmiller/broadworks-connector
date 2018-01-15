<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterModifyAvailabilityListRequest
 *
 * Request for an agent to login or logout of one or more Call Centers.
 *         Contains a list specifing the desired login status of one or more call
 * centers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserCallCenterModifyRequest
 */
class UserCallCenterModifyAvailabilityListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName callCenterAvailability
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentAvailability[]
     */
    private $callCenterAvailability = array(
        
    );

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for callCenterAvailability
     *
     * @ElementName callCenterAvailability
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentAvailability[]
     */
    public function getCallCenterAvailability()
    {
        return $this->callCenterAvailability;
    }

    /**
     * Setter for callCenterAvailability
     *
     * @ElementName callCenterAvailability
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentAvailability[] $callCenterAvailability
     * @return $this
     */
    public function setCallCenterAvailability($callCenterAvailability)
    {
        $this->callCenterAvailability = $callCenterAvailability;
        return $this;
    }

    /**
     * Adder for callCenterAvailability
     *
     * @ElementName callCenterAvailability
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentAvailability $callCenterAvailability
     * @return $this
     */
    public function addCallCenterAvailability($callCenterAvailability)
    {
        $this->callCenterAvailability []= $callCenterAvailability;
        return $this;
    }


}


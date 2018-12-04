<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetUnlicensedAgentListRequest
 *
 * Get a list of unlicensed users who are preventing the Call Center from upgrading to another type.
 *         The response is either GroupCallCenterGetUnlicensedAgentListRequest or ErrorResponse.
 *
 * @see GroupCallCenterGetUnlicensedAgentListRequest
 * @see ErrorResponse
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:4320","type":"sequence"}]
 */
class GroupCallCenterGetUnlicensedAgentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:4320
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName callCenterType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterType
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:4320
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterType|null
     */
    private $callCenterType = null;

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
     * Getter for callCenterType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterType
     */
    public function getCallCenterType()
    {
        return $this->callCenterType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCenterType;
    }

    /**
     * Setter for callCenterType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterType $callCenterType
     * @return $this
     */
    public function setCallCenterType(\CWM\BroadWorksConnector\Ocip\Models\CallCenterType $callCenterType)
    {
        $this->callCenterType = $callCenterType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCenterType()
    {
        $this->callCenterType = null;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetUnlicensedAgentListRequest
 *
 * Get a list of unlicensed users who are preventing the Call Center from upgrading to another type.
 *         The response is either GroupCallCenterGetUnlicensedAgentListResponse or ErrorResponse.
 *
 * @see GroupCallCenterGetUnlicensedAgentListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:4916","type":"sequence"}]
 */
class GroupCallCenterGetUnlicensedAgentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:4916
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName callCenterType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterType
     * @Group e2c537e3e39483b96620673a7012ffdd:4916
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


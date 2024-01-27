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
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:4868","type":"sequence"}]
 */
class GroupCallCenterGetUnlicensedAgentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:4868
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName callCenterType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterType
     * @Group 4d65d3449061c568639c8cc1e2492285:4868
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterType|null
     */
    protected $callCenterType = null;

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


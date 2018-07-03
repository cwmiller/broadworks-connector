<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetUnlicensedAgentListRequest
 *
 * Get a list of unlicensed users who are preventing the Call Center from upgrading
 * to another type.
 *         The response is either GroupCallCenterGetUnlicensedAgentListRequest or
 * ErrorResponse.
 *
 * @see GroupCallCenterGetUnlicensedAgentListRequest
 * @see ErrorResponse
 */
class GroupCallCenterGetUnlicensedAgentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName callCenterType
     * @var string|null
     */
    private $callCenterType = null;

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
     * Getter for callCenterType
     *
     * @ElementName callCenterType
     * @return string|null
     */
    public function getCallCenterType()
    {
        return $this->callCenterType;
    }

    /**
     * Setter for callCenterType
     *
     * @ElementName callCenterType
     * @param string|null $callCenterType
     * @return $this
     */
    public function setCallCenterType($callCenterType)
    {
        $this->callCenterType = $callCenterType;
        return $this;
    }


}


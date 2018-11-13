<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterModifyCallCenterListRequest
 *
 * Request to modify the call center list for an agent.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserCallCenterModifyCallCenterListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName agentUserId
     * @Type string
     * @var string|null
     */
    private $agentUserId = null;

    /**
     * @ElementName serviceUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceUserIdList = null;

    /**
     * Getter for agentUserId
     *
     * @return string
     */
    public function getAgentUserId()
    {
        return $this->agentUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @param string $agentUserId
     * @return $this
     */
    public function setAgentUserId($agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserId()
    {
        $this->agentUserId = null;
        return $this;
    }

    /**
     * Getter for serviceUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getServiceUserIdList()
    {
        return $this->serviceUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserIdList;
    }

    /**
     * Setter for serviceUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $serviceUserIdList
     * @return $this
     */
    public function setServiceUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $serviceUserIdList)
    {
        if ($serviceUserIdList === null) {
            $this->serviceUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serviceUserIdList = $serviceUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserIdList()
    {
        $this->serviceUserIdList = null;
        return $this;
    }


}


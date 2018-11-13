<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifySupervisorListRequest16
 *
 * Request to modify the supervisor list for a call center.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCenterModifySupervisorListRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName supervisorUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $supervisorUserIdList = null;

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
     * Getter for supervisorUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getSupervisorUserIdList()
    {
        return $this->supervisorUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supervisorUserIdList;
    }

    /**
     * Setter for supervisorUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $supervisorUserIdList
     * @return $this
     */
    public function setSupervisorUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $supervisorUserIdList)
    {
        if ($supervisorUserIdList === null) {
            $this->supervisorUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->supervisorUserIdList = $supervisorUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupervisorUserIdList()
    {
        $this->supervisorUserIdList = null;
        return $this;
    }


}

